<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => [
            'required',
            'string',
            'min:8',               // At least 8 characters
            'confirmed',           // Must match password_confirmation
            'regex:/[a-z]/',       // At least one lowercase letter
            'regex:/[A-Z]/',       // At least one uppercase letter
            'regex:/[0-9]/',       // At least one digit
            'regex:/[@$!%*?&]/',   // At least one special character
                    ],
                ]);
 
        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
 
        // Log them in
        Auth::login($user);
 
        // Redirect to home
        return redirect('/')->with('success', 'Welcome to TechCraft!');
    }
}
