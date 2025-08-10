@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="max-w-lg mx-auto">
        <h1 class="text-5xl font-extrabold mb-8 text-center bg-gradient-to-r from-blue-600 to-purple-600 text-transparent bg-clip-text">Get in Touch</h1>
        <form method="POST" action="#" class="space-y-6 bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm p-8 rounded-xl shadow-xl">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-2">Name:</label>
                <input type="text" name="name" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 transition-shadow">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Email:</label>
                <input type="email" name="email" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 transition-shadow">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Message:</label>
                <textarea name="message" rows="6" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 transition-shadow"></textarea>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 rounded-md hover:from-blue-600 hover:to-purple-700 transition-all duration-300">Send Message</button>
        </form>
    </section>
@endsection