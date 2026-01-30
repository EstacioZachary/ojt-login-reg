<!DOCTYPE html>
<html lang="en" data-theme="techcraft">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'TechCraft' }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans text-base-content">

    <nav class="navbar bg-base-100/80 backdrop-blur border-b border-cyan-500/10">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl font-extrabold tracking-wide">
                ⚙️ TechCraft
            </a>
        </div>

        <div class="navbar-center hidden md:flex gap-2">
            <a href="/" class="btn btn-ghost btn-sm font-semibold hover:text-cyan-400">Home</a>
            <a href="/about" class="btn btn-ghost btn-sm font-semibold hover:text-cyan-400">About</a>
            <a href="{{ route('feed') }}" class="btn btn-ghost btn-sm font-semibold hover:text-cyan-400">Crafts</a>
            <a href="#contact" class="btn btn-ghost btn-sm font-semibold hover:text-cyan-400">Contact</a>
        </div>

        <div class="navbar-end gap-2">
            @auth
                <span class="text-sm opacity-80">{{ auth()->user()->name }}</span>

                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-ghost btn-sm hover:text-red-400">
                        Logout
                    </button>
                </form>
            @else
                <a href="/login" class="btn btn-ghost btn-sm hover:text-blue-400">
                    Login
                </a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm">
                    Register
                </a>
            @endauth
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-12 min-w-0">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-6 bg-base-300 border-t border-cyan-500/10 text-xs text-base-content/70">
        <div>
            <p>© {{ date('Y') }} TechCraft · Built for creators</p>
        </div>
    </footer>

</body>
</html>
