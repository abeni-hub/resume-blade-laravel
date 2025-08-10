<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern portfolio showcasing projects and skills with Tailwind CSS and Laravel.">
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-gray-200 dark:bg-gray-800 shadow-md">
        <nav class="container mx-auto px-4 py-4 flex flex-col md:flex-row md:justify-between md:items-center">
            <a href="/" class="text-2xl font-bold tracking-tight mb-4 md:mb-0">My Portfolio</a>
            <div class="flex flex-col md:flex-row md:space-x-6">
                <a href="/" class="hover:text-blue-500 transition-colors mb-2 md:mb-0">Home</a>
                <a href="/about" class="hover:text-blue-500 transition-colors mb-2 md:mb-0">About</a>
                <a href="/projects" class="hover:text-blue-500 transition-colors mb-2 md:mb-0">Projects</a>
                <a href="/contact" class="hover:text-blue-500 transition-colors">Contact</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-12">
        @yield('content')
    </main>

    <footer class="bg-gray-200 dark:bg-gray-800 text-center py-8">
        <div class="container mx-auto px-4">
            <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="#" class="hover:text-blue-500">GitHub</a>
                <a href="#" class="hover:text-blue-500">LinkedIn</a>
                <a href="#" class="hover:text-blue-500">Twitter</a>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>