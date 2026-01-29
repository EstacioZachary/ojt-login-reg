   @vite(['resources/css/app.css', 'resources/js/app.js'])
<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)]">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Create Account</h1>

                    <form method="POST" action="/register">
                        @csrf

                        <!-- Name -->
                        <label class="floating-label mb-6">
                            <input type="text"
                                   name="name"
                                   placeholder="John Doe"
                                   value="{{ old('name') }}"
                                   class="input input-bordered @error('name') input-error @enderror"
                                   required>
                            <span>Username</span>
                        </label>
                        @error('name')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Email -->
                        <label class="floating-label mb-6">
                            <input type="email"
                                   name="email"
                                   placeholder="[mail@example.com](<mailto:mail@example.com>)"
                                   value="{{ old('email') }}"
                                   class="input input-bordered @error('email') input-error @enderror"
                                   required>
                            <span>Email</span>
                        </label>
                        @error('email')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
<!-- Password Field -->
<label class="floating-label mb-6 relative block">
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


<label class="floating-label mb-6 relative block">
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
                        <div class="form-control mt-8">
                            <button type="submit" class="btn btn-primary btn-sm w-full">
                                Register
                            </button>
                        </div>
                    </form>

                    <div class="divider">OR</div>
                    <p class="text-center text-sm">
                        Already have an account?
                        <a href="/login" class="link link-primary">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
        


    </div>
</x-layout>