<x-layout>
<x-slot:title>TechCraft</x-slot:title>

<div class="hero min-h-[calc(100vh-9rem)] bg-gradient-to-r from-purple-900 to-pink-500 text-white">
    <div class="hero-content text-center space-y-6">
        <h1 class="text-5xl font-extrabold drop-shadow-lg">🎮 Welcome to TechCraft!</h1>
        <p class="text-lg drop-shadow-md">
            Showcase your games, share your creations, and explore what other creators are making!
        </p>
        <div class="flex justify-center gap-4">
            @guest
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg shadow-lg hover:scale-105 transition-transform">Get Started</a>
                <a href="{{ route('login') }}" class="btn btn-ghost btn-lg shadow-lg hover:scale-105 transition-transform">Login</a>
            @else
                <a href="{{ route('feed') }}" class="btn btn-primary btn-lg shadow-lg hover:scale-105 transition-transform">Go to Feed</a>
            @endguest
        </div>
    </div>
</div>

<div class="max-w-5xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
    <div class="card bg-base-100 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all">
        <div class="card-body text-center">
            <h2 class="text-xl font-bold">Create Your Game</h2>
            <p class="mt-2 text-base-content/70">
                Easily post your game with a title and description to showcase your work.
            </p>
        </div>
    </div>
    <div class="card bg-base-100 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all">
        <div class="card-body text-center">
            <h2 class="text-xl font-bold">Explore Games</h2>
            <p class="mt-2 text-base-content/70">
                See what other creators are making and get inspired for your next project.
            </p>
        </div>
    </div>
    <div class="card bg-base-100 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all">
        <div class="card-body text-center">
            <h2 class="text-xl font-bold">Connect & Collaborate</h2>
            <p class="mt-2 text-base-content/70">
                Engage with other creators, share feedback, and grow your game development skills.
            </p>
        </div>
    </div>
</div>

</x-layout>
