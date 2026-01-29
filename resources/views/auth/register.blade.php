@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)] bg-gradient-to-b from-indigo-100 via-white to-indigo-100">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100 shadow-lg rounded-xl">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Create Account</h1>

                    <form method="POST" action="/register" class="space-y-4">
                        @csrf

                        <!-- Name -->
                        <label class="floating-label mb-4">
                            <input type="text"
                                   name="name"
                                   placeholder="John Doe"
                                   value="{{ old('name') }}"
                                   class="input input-bordered w-full @error('name') input-error @enderror"
                                   required>
                            <span>Username</span>
                        </label>
                        @error('name')
                        <p class="text-xs text-error mt-1">{{ $message }}</p>
                        @enderror

                        <!-- Email -->
                        <label class="floating-label mb-4">
                            <input type="email"
                                   name="email"
                                   placeholder="you@example.com"
                                   value="{{ old('email') }}"
                                   class="input input-bordered w-full @error('email') input-error @enderror"
                                   required>
                            <span>Email</span>
                        </label>
                        @error('email')
                        <p class="text-xs text-error mt-1">{{ $message }}</p>
                        @enderror

                        <!-- Password -->
                        <label class="floating-label mb-4 relative block">
                            <input type="password"
                                   name="password"
                                   id="password"
                                   placeholder="••••••••"
                                   class="input input-bordered w-full @error('password') input-error @enderror"
                                   required>
                            <span>Password</span>

                            <button type="button"
                                    data-toggle-password
                                    data-target="password"
                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700 z-10">
                                <i class="fa-regular fa-eye text-lg"></i>
                            </button>
                        </label>
                        <p class="text-xs text-base-content/70 mb-2">
                            Minimum 8 characters, with at least 1 uppercase, 1 lowercase, 1 number, and 1 symbol.
                        </p>
                        @error('password')
                        <p class="text-xs text-error mt-1">{{ $message }}</p>
                        @enderror

                        <!-- Confirm Password -->
                        <label class="floating-label mb-4 relative block">
                            <input type="password"
                                   name="password_confirmation"
                                   id="password_confirmation"
                                   placeholder="••••••••"
                                   class="input input-bordered w-full"
                                   required>
                            <span>Confirm Password</span>

                            <button type="button"
                                    data-toggle-password
                                    data-target="password_confirmation"
                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700 z-10">
                                <i class="fa-regular fa-eye text-lg"></i>
                            </button>
                        </label>

                        <!-- Submit Button -->
                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-primary w-full">
                                Register
                            </button>
                        </div>
                    </form>

                    <div class="divider my-4">OR</div>
                    <p class="text-center text-sm">
                        Already have an account?
                        <a href="/login" class="link link-primary font-semibold">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
