<!DOCTYPE html>
<html lang="en" data-theme="cyberpunk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'TechCraft' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">
    <nav class="navbar bg-base-100 shadow">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl font-bold">⚙️ TechCraft</a>
        </div>

        <div class="navbar-center hidden md:flex gap-4">
            <a href="/" class="btn btn-ghost btn-sm font-bold">Home</a>
            <a href="/about" class="btn btn-ghost btn-sm font-bold">About</a>
            <a href="{{ route('feed') }}" class="btn btn-ghost btn-sm font-bold">Crafts</a>
    <a href="#contact" class="btn btn-ghost btn-sm font-bold">Contact</a>
        </div>

        <div class="navbar-end gap-2">
            @auth
                <span class="text-sm">{{ auth()->user()->name }}</span>
                <form method="POST" action="/logout" class="inline" id="logout-form">
                @csrf
                <button type="submit" class="btn btn-ghost btn-sm">Logout</button>
                </form>

            @else
                <a href="/login" class="btn btn-ghost btn-sm">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
            @endauth
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8 min-w-0">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© {{ date('Y') }} TechCraft</p>
        </div>
    </footer>
</body>
</html>
