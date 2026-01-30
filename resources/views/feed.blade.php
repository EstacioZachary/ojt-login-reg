<x-layout>
    <x-slot:title>Home</x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold">Welcome to TechCraft!</h1>
                    <p class="mt-4 text-base-content/60">A platform where you can showcase games that you've created!</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Post Crafts Form --}}
    <div class="card bg-base-100 shadow mt-8">
        <div class="card-body gap-5">
            <form method="POST" action="/crafts" class="space-y-4" id="craft-form">
                @csrf

                @auth
                    <!-- Logged-in Users: Regular Input -->
                    <div class="form-control w-full">
                        <input
                            type="text"
                            name="title"
                            placeholder="Game title"
                            value="{{ old('title') }}"
                            class="input input-bordered w-full @error('title') input-error @enderror"
                            maxlength="255"
                            required
                        />
                        @error('title')
                            <span class="text-error text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <textarea
                            name="description"
                            placeholder="Describe your game..."
                            class="textarea textarea-bordered w-full resize-none @error('description') textarea-error @enderror"
                            rows="5"
                            maxlength="1000"
                            required
                        >{{ old('description') }}</textarea>

                        @error('description')
                            <span class="text-error text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                @endauth

                @guest
                    <!-- Guests: Disabled Input -->
                    <div class="form-control w-full">
                        <input
                            type="text"
                            name="title"
                            placeholder="You must be logged in to post a game"
                            class="input input-bordered w-full cursor-not-allowed"
                            disabled
                        />
                    </div>

                    <div class="form-control w-full">
                        <textarea
                            placeholder="You must be logged in to post a game"
                            class="textarea textarea-bordered w-full resize-none cursor-not-allowed"
                            rows="5"
                            disabled
                        ></textarea>
                    </div>
                @endguest

                <!-- Actions -->
                <div class="flex justify-end pt-2 border-t border-base-300">
                    <button type="submit" class="btn btn-primary btn-sm" id="craft-submit">
                        Submit Craft
                    </button>
                </div>
            </form>
        </div>
    </div>

    <h1 class="text-3xl font-bold mt-8">Latest Crafts</h1>

    {{-- Crafts Feed --}}
    <div class="space-y-4 mt-8">
        @forelse ($crafts as $craft)
            <x-craft :craft="$craft" class="hover:scale-105 transition-transform shadow-lg rounded-lg" />
        @empty
            <div class="hero py-12">
                <div class="hero-content text-center">
                    <div>
                        <svg class="mx-auto h-12 w-12 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <p class="mt-4 text-base-content/60">No crafts yet.</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>

    @guest
        {{-- Guest Alert for Submit --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('craft-form');
                if (!form) return;

                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm("You must be logged in to post a craft. Go to login page?")) {
                        window.location.href = "/login";
                    }
                });
            });
        </script>
    @endguest

</x-layout>
