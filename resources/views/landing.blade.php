<x-layout>
    <x-slot:title>TechCraft</x-slot:title>

    <section class=" relative min-h-[calc(100vh-9rem)] flex items-center bg-gradient-to-r from-cyan-900 via-blue-900 to-indigo-900 text-white">
        <div class="absolute inset-0 bg-black/30"></div>

        <div class="relative max-w-4xl mx-auto text-center px-6 space-y-8">
            <h1 class="text-5xl md:text-6xl font-extrabold drop-shadow-xl">
                🚀 Welcome to <span class="text-cyan-300">TechCraft</span>
            </h1>

            <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto">
                Build, showcase, and explore cutting-edge games and tech-driven creations.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4">
                @guest
                    <a href="{{ route('register') }}" class="btn btn-info btn-lg shadow-xl hover:scale-105 transition">
                        Join TechCraft
                    </a>
                @else
                    <a href="{{ route('feed') }}" class="btn btn-info btn-lg shadow-xl hover:scale-105 transition">
                        Go to Feed
                    </a>
                @endguest
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto py-20 px-6">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-bold">Platform Features</h2>
            <p class="mt-3 text-base-content/70 max-w-xl mx-auto">
                Tools designed for modern creators and developers.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card bg-base-100 shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="card-body text-center space-y-3">
                    <div class="text-4xl text-cyan-500">🧠</div>
                    <h3 class="text-xl font-bold">Smart Publishing</h3>
                    <p class="text-base-content/70">
                        Post your projects with rich descriptions, updates, and version history.
                    </p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="card-body text-center space-y-3">
                    <div class="text-4xl text-blue-500">📡</div>
                    <h3 class="text-xl font-bold">Discover Innovation</h3>
                    <p class="text-base-content/70">
                        Explore trending games and experimental tech from the community.
                    </p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="card-body text-center space-y-3">
                    <div class="text-4xl text-indigo-500">🤝</div>
                    <h3 class="text-xl font-bold">Collaborate</h3>
                    <p class="text-base-content/70">
                        Connect with developers, designers, and engineers worldwide.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-base-200 py-20">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div class="space-y-2">
                <div class="text-4xl font-extrabold text-cyan-600">500+</div>
                <p class="text-base-content/70">Projects Shared</p>
            </div>
            <div class="space-y-2">
                <div class="text-4xl font-extrabold text-blue-600">1.2k</div>
                <p class="text-base-content/70">Creators</p>
            </div>
            <div class="space-y-2">
                <div class="text-4xl font-extrabold text-indigo-600">3k+</div>
                <p class="text-base-content/70">Community Interactions</p>
            </div>
            <div class="space-y-2">
                <div class="text-4xl font-extrabold text-cyan-600">24/7</div>
                <p class="text-base-content/70">Creative Flow</p>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto py-20 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold">Built for Modern Game Creators</h2>
                <p class="text-base-content/70">
                    Whether you're a solo developer or part of a team, TechCraft provides a clean,
                    focused environment to inspire your future build, share, and improve on your ideas.
                </p>
                <ul class="space-y-3 text-base-content/80">
                    <li>⚡ Fast and responsive UI</li>
                    <li>🔒 Secure creator accounts</li>
                    <li>📈 Growth-focused discovery</li>
                </ul>
            </div>

            <div class="card bg-gradient-to-br from-cyan-500/20 to-blue-500/20 shadow-xl">
                <div class="card-body space-y-4">
                    <div class="text-sm uppercase tracking-widest text-cyan-600">
                        Tech Stack Friendly
                    </div>
                    <h3 class="text-2xl font-bold">
                        Designed for Developers
                    </h3>
                    <p class="text-base-content/70">
                        Inspired by modern development workflows and clean UI systems.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-cyan-800 via-blue-800 to-indigo-800 text-white py-20">
        <div class="max-w-5xl mx-auto text-center px-6 space-y-6">
            <h2 class="text-3xl md:text-4xl font-bold">
                Start Building the Future of Games Today
            </h2>

            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Join a tech-focused community where innovation meets creativity.
            </p>
        </div>
    </section>
</x-layout>
