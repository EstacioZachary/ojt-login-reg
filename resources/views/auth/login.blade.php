
<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)]">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Welcome Back Crafter!</h1>

                    <form method="POST" action="/login">
                        @csrf

                        <!-- Email -->
                        <label class="floating-label mb-6">
                            <input type="email"
                                   name="email"
                                   placeholder="sample@email.com"
                                   value="{{ old('email') }}"
                                   class="w-full input input-bordered @error('email') input-error @enderror"
                                   required
                                   autofocus>
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


                        <!-- Remember Me -->
                        <div class="form-control mt-4">
                            <label class="label cursor-pointer justify-start">
                                <input type="checkbox"
                                       name="remember"
                                       class="checkbox">
                                <span class="label-text ml-2">Remember me</span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-control mt-8">
                            <button type="submit" class="btn btn-primary btn-sm w-full">
                                Sign In
                            </button>
                        </div>
                    </form>

                    <div class="divider">OR</div>
                    <p class="text-center text-sm">
                        Don't have an account?
                        <a href="/register" class="link link-primary">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>