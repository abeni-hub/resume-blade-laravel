@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <!-- HERO -->
  <section id="home" class="text-center py-20 rounded-2xl shadow-2xl mb-16">
    <div class="max-w-3xl mx-auto bg-gradient-to-br from-white/60 to-white/30 dark:from-gray-900/60 dark:to-gray-900/30 backdrop-blur px-8 py-12 rounded-2xl">
      <img src="{{ asset('portfolios/my photo.jpg') }}" alt="Professional Photo" class="mx-auto mb-6 rounded-full shadow-xl w-48 h-48 object-cover">
      <h1 class="text-5xl md:text-6xl font-extrabold mb-4">Hi, I am Abeni</h1>
      <p class="text-lg md:text-2xl mb-6">Backend Web Developer & Data Analyst</p>
      <div class="flex justify-center gap-4">
        <a href="#projects" class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full font-semibold shadow hover:scale-105 transition">Explore Projects</a>
        <a href="#contact" class="inline-block border border-gray-300 dark:border-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 dark:hover:bg-gray-800 transition">Contact Me</a>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="max-w-6xl mx-auto mb-16">
    <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-8">About Me</h2>
    <div class="flex flex-col md:flex-row items-center gap-8 bg-white/30 dark:bg-gray-800/30 backdrop-blur p-8 rounded-2xl shadow">
      <!-- <img src="{{ asset('portfolios/inventory.jpg') }}" alt="Profile" class="w-56 h-56 rounded-full object-cover shadow-lg"> -->
      <div>
        <p class="text-lg leading-relaxed mb-6">
          Passionate developer skilled in Django Rest Framework, Laravel, SQLite, PostgreSQL, Data Analysis, and Machine Learning/AI. I enjoy learning, building, and delivering real-world projects, with hands-on experience across diverse technologies and problem-solving challenges.
        </p>

        <h3 class="text-xl font-semibold mb-3">Skills</h3>
        <div class="flex flex-wrap gap-3">
          @foreach (['Laravel','Django API','React','Python','SQLite','Deployment'] as $skill)
            <span class="px-3 py-1 rounded-full bg-gradient-to-r from-blue-100 to-purple-100 dark:from-blue-900 dark:to-purple-900 text-blue-800 dark:text-blue-200 text-sm font-medium">{{ $skill }}</span>
          @endforeach
        </div>
      </div>
    </div>

    <div class="mt-8 text-center">
      <a href="{{ asset('portfolios/Abenezer CV.pdf') }}" download class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full font-semibold shadow hover:scale-105 transition">Download CV</a>
    </div>
  </section>

  <!-- PROJECTS -->
  <section id="projects" class="max-w-7xl mx-auto mb-16">
    <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-8">Projects</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      <!-- Project cards (kept your image links and project text) -->
      <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur rounded-xl shadow overflow-hidden transform hover:scale-105 transition">
        <img src="{{ asset('portfolios/inventory.jpg') }}" alt="Inventory Management System" class="w-full h-44 object-cover">
        <div class="p-5">
          <h3 class="text-xl font-semibold mb-2">Inventory Management System</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">A comprehensive system for tracking and managing inventory items efficiently.</p>
          <div class="flex flex-wrap gap-2 mb-3">
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">Django RF</span>
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">React</span>
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">sqlite</span>
          </div>
          <a href="https://github.com/abeni-hub/Store_Management_System" class="text-blue-600 hover:underline text-sm">View Details</a>
        </div>
      </div>

      <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur rounded-xl shadow overflow-hidden transform hover:scale-105 transition">
        <img src="{{ asset('portfolios/kids clinic.PNG') }}" alt="Kids Clinic Website" class="w-full h-44 object-cover">
        <div class="p-5">
          <h3 class="text-xl font-semibold mb-2">Kids Clinic Website</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">A user-friendly website for a pediatric clinic, including appointment booking and resources.</p>
          <div class="flex flex-wrap gap-2 mb-3">
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">React</span>
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">Tailwind CSS</span>
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">Django API</span>
          </div>
          <a href="https://github.com/abeni-hub/CMS-with-Authentication" class="text-blue-600 hover:underline text-sm">View Details</a>
        </div>
      </div>

      <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur rounded-xl shadow overflow-hidden transform hover:scale-105 transition">
        <img src="{{ asset('portfolios/rasp.jpg') }}" alt="SIDS Monitoring System" class="w-full h-44 object-cover">
        <div class="p-5">
          <h3 class="text-xl font-semibold mb-2">SIDS Monitoring System</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">Smart infant monitoring using Django, React and Raspberry Pi sensors to track vitals and alert caregivers.</p>
          <div class="flex flex-wrap gap-2 mb-3">
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">React</span>
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">Django API</span>
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">Raspberry Pi</span>
          </div>
          <a href="https://github.com/abeni-hub/SIDS-Monitoring-System" class="text-blue-600 hover:underline text-sm">View Details</a>
        </div>
      </div>

      <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur rounded-xl shadow overflow-hidden transform hover:scale-105 transition">
        <img src="{{ asset('portfolios/todo.jpg') }}" alt="Advanced TodoList" class="w-full h-44 object-cover">
        <div class="p-5">
          <h3 class="text-xl font-semibold mb-2">Advanced TodoList</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">A task-management web app built with Laravel to help users organize daily tasks.</p>
          <div class="flex flex-wrap gap-2 mb-3">
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">Laravel</span>
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">sqlite</span>
          </div>
          <a href="https://github.com/abeni-hub/Advanced-Todo-list-with-laravel" class="text-blue-600 hover:underline text-sm">View Details</a>
        </div>
      </div>

      <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur rounded-xl shadow overflow-hidden transform hover:scale-105 transition">
        <img src="{{ asset('portfolios/bus ticket.jpg') }}" alt="Bus Ticket Booking System" class="w-full h-44 object-cover">
        <div class="p-5">
          <h3 class="text-xl font-semibold mb-2">Bus Ticket Booking System</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">Online platform for booking bus tickets with real-time availability and payments.</p>
          <div class="flex flex-wrap gap-2 mb-3">
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">Java</span>
            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs">MySQL</span>
          </div>
          <a href="https://github.com/abeni-hub/BUSTICKETPROJECT" class="text-blue-600 hover:underline text-sm">View Details</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="max-w-xl mx-auto mb-16">
    <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-6">Get in Touch</h2>

    <form method="POST" action="#" class="space-y-6 bg-white/30 dark:bg-gray-800/30 backdrop-blur p-6 rounded-xl shadow">
      @csrf
      <div>
        <label class="block text-sm font-medium mb-1">Name</label>
        <input type="text" name="name" required class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-transparent" />
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Email</label>
        <input type="email" name="email" required class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-transparent" />
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Message</label>
        <textarea name="message" rows="5" required class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-transparent"></textarea>
      </div>

      <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-full font-semibold hover:scale-105 transition">Send Message</button>
    </form>
  </section>
@endsection
