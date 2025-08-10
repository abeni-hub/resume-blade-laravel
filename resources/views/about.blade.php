@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="max-w-5xl mx-auto">
        <h1 class="text-5xl font-extrabold mb-8 text-center md:text-left bg-gradient-to-r from-blue-600 to-purple-600 text-transparent bg-clip-text">About Me</h1>
        <div class="flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-12 backdrop-blur-sm bg-white/30 dark:bg-gray-800/30 p-8 rounded-xl shadow-xl">
            <img src="{{ asset('portfolios/inventory.jpg') }}" alt="Profile" class="w-64 h-64 rounded-full object-cover shadow-2xl transform hover:scale-105 transition-transform duration-300">
            <div>
                <p class="text-xl leading-relaxed mb-6">Passionate developer skilled in Django Rest Framework, Laravel, SQLite, PostgreSQL, Data Analysis, and Machine Learning/AI. I enjoy learning, building, and delivering real-world projects, with hands-on experience across diverse technologies and problem-solving challenges.</p>
                <h2 class="text-3xl font-semibold mb-4">Skills</h2>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Laravel</span>
                    <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Django API</span>
                    <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">React</span>
                    <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Python</span>
                     <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">sqlite</span>
                    <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Deployement</span> 
                </div>
            </div>
        </div>
        <div class="mt-12 text-center">
            <h2 class="text-3xl font-semibold mb-4">Downloads</h2>
            <a href="{{ asset('portfolios/Abenezer CV.pdf') }}" download class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-full font-bold hover:from-blue-600 hover:to-purple-700 transition-all duration-300 shadow-lg">Download CV</a>
        </div>
    </section>
@endsection