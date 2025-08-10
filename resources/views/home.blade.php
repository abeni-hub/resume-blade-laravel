@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="text-center py-20 bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-2xl shadow-2xl mb-16">
        <img src="{{ asset('portfolios/my photo.jpg') }}" alt="Professional Photo" class="mx-auto mb-6 rounded-full shadow-xl w-48 h-48 object-cover">
        <h1 class="text-6xl font-extrabold mb-6">Hi I am Abeni</h1>
        <p class="text-2xl mb-8 max-w-2xl mx-auto">I am Backend Web developer and Data Analyst</p>
        <a href="/projects" class="bg-white text-blue-600 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-all duration-300 shadow-lg">Explore Projects</a>
    </section>
    <section class="max-w-5xl mx-auto">
        <h2 class="text-4xl font-bold mb-8 text-center">Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm p-6 rounded-xl shadow-xl transform hover:scale-105 transition-all duration-300">
                <h3 class="text-2xl font-semibold mb-2">Project Highlight 1</h3>
                <p class="text-gray-600 dark:text-gray-400">Brief description of a featured project.</p>
            </div>
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm p-6 rounded-xl shadow-xl transform hover:scale-105 transition-all duration-300">
                <h3 class="text-2xl font-semibold mb-2">Project Highlight 2</h3>
                <p class="text-gray-600 dark:text-gray-400">Brief description of another project.</p>
            </div>
        </div>
    </section>
@endsection