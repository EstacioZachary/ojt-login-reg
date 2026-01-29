<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Validator;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\Models\Craft;

class CraftController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $crafts = Craft::with('user')->latest()->take(50)->get();
    return view('feed', ['crafts' => $crafts]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|min:5',
            'description' => 'required|string|max:1000|min:50',
        ],[
            'title.required' => 'Please input the title of your game!.',
            'title.min' => 'Your game title must be at least 5 characters.',
            'description.required' => 'Please input the description of your game.',
            'description.min' => 'The description must be at least 50 characters.',

        ]);

        Auth::user()->crafts()->create($validated);

        return redirect('/')->with('success', 'Craft posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Craft $craft)
    {
        $this->authorize('update', $craft);
         return view('crafts.edit', compact('craft'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Craft $craft)
    {
        $this->authorize('update', $craft);

        $validated = $request->validate([
            'title' => 'required|string|max:255|min:5',
            'description' => 'required|string|max:1000|min:50',
        ],[
            'title.required' => 'Please input the title of your game!.',
            'title.min' => 'Your game title must be at least 5 characters.',
            'description.required' => 'Please input the description of your game.',
            'description.min' => 'The description must be at least 50 characters.',

        ]);
        $craft->update($validated);

        return redirect('/')->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Craft $craft)
    {
        $this->authorize('delete', $craft);
        $craft->delete();

        return redirect('/')->with('success', 'Post deleted!');
    }
}
