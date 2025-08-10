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
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Django RF</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">React</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">sqlite</span>
                    </div>
                    <a href="https://github.com/abeni-hub/Store_Management_System" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <img src="{{ asset('portfolios/kids clinic.PNG') }}" alt="Kids Clinic Website" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">Kids Clinic Website</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A user-friendly website for a pediatric clinic, including appointment booking and resources.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">React</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Django API</span>
                    </div>
                    <a href="https://github.com/abeni-hub/CMS-with-Authentication" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <img src="{{ asset('portfolios/rasp.jpg') }}" alt="Bus Ticket Booking System" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">SIDS Monitoring System</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A smart infant monitoring system that uses Django for backend processing, React for the interface, and Raspberry Pi with hardware sensors to track vital signs and alert caregivers for early detection of Sudden Infant Death Syndrome risks.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">React</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Django API</span>
                         <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Raspberry Pi</span>
                    </div>
                    <a href="https://github.com/abeni-hub/SIDS-Monitoring-System" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
            
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                 <img src="{{ asset('portfolios/todo.jpg') }}" alt="Bus Ticket Booking System" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">Advanced TodoList</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">A simple and efficient task management web app built with Laravel, designed to help users organize, track, and complete their daily tasks with ease.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">sqlite</span>
                    </div>
                    <a href="https://github.com/abeni-hub/Advanced-Todo-list-with-laravel" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
            <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <img src="{{ asset('portfolios/bus ticket.jpg') }}" alt="Bus Ticket Booking System" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">Bus Ticket Booking System</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">An online platform for booking bus tickets with real-time availability and payments.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">Java</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium">MySQL</span>
                    </div>
                    <a href="https://github.com/abeni-hub/BUSTICKETPROJECT" class="block mt-4 text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </section>
@endsection