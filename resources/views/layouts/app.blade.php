<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-50 text-gray-900">

    <header>
        <nav style="padding: 10px; background-color: #eee;">
            <a href="/" style="margin-right: 15px;">Home</a>
            <a href="/about" style="margin-right: 15px;">About Us</a>
            <a href="/projects" style="margin-right: 15px;">Projects</a>
            <a href="/contact">Contact Us</a>
        </nav>
    </header>

    <main style="padding: 20px;">
        @yield('content')
    </main>

    <footer style="text-align: center; padding: 20px; background-color: #eee;">
        &copy; {{ date('Y') }} My Portfolio
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
