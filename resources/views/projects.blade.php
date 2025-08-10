@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <section>
        <h1 class="text-5xl font-extrabold mb-8 text-center bg-gradient-to-r from-blue-600 to-purple-600 text-transparent bg-clip-text">My Projects</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <img src="{{ asset('portfolios/inventory.jpg') }}" alt="Inventory Management System" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">Inventory Management System</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A comprehensive system for tracking and managing inventory items efficiently.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">PHP</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">MySQL</span>
                    </div>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <img src="{{ asset('portfolios/kids clinic.PNG') }}" alt="Kids Clinic Website" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">Kids Clinic Website</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A user-friendly website for a pediatric clinic, including appointment booking and resources.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">JavaScript</span>
                    </div>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <img src="{{ asset('portfolios/bus ticket.jpg') }}" alt="Bus Ticket Booking System" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">Bus Ticket Booking System</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">An online platform for booking bus tickets with real-time availability and payments.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Vue.js</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">API Integration</span>
                    </div>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <img src="https://via.placeholder.com/400x200?text=Project+4" alt="Project 4" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">Project 4</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Description of Project 4. Replace with your details and image.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">React</span>
                    </div>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <img src="https://via.placeholder.com/400x200?text=Project+5" alt="Project 5" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">Project 5</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Description of Project 5. Replace with your details and image.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Node.js</span>
                    </div>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </section>
@endsection