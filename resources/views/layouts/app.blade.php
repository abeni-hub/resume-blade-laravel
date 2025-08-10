<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Modern portfolio showcasing projects and skills with Tailwind CSS and Laravel." />
  @vite('resources/css/app.css')
  <style>
    /* ensure smooth scrolling and better focus outlines */
    html { scroll-behavior: smooth; }
    :focus { outline: 2px solid transparent; outline-offset: 2px; }
  </style>
</head>
<body
  id="body"
  class="antialiased bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300"
>
  <!-- Sticky header -->
  <header id="header" class="sticky top-0 z-50 bg-white/70 dark:bg-gray-900/70 backdrop-blur-md shadow-sm">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between py-4">
        <a href="#home" class="text-2xl font-extrabold tracking-tight bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
          My Portfolio
        </a>

        <!-- Desktop nav -->
        <nav class="hidden md:flex items-center space-x-8" aria-label="Primary">
          <a class="nav-link text-sm font-medium hover:text-blue-600" href="#home">Home</a>
          <a class="nav-link text-sm font-medium hover:text-blue-600" href="#about">About</a>
          <a class="nav-link text-sm font-medium hover:text-blue-600" href="#projects">Projects</a>
          <a class="nav-link text-sm font-medium hover:text-blue-600" href="#contact">Contact</a>
        </nav>

        <div class="flex items-center space-x-3">
          <!-- Dark mode toggle -->
          <button id="theme-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 hover:scale-105 transition" aria-label="Toggle theme">
            <svg id="icon-sun" class="w-5 h-5 hidden" viewBox="0 0 20 20" fill="currentColor"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zM10 14a4 4 0 100-8 4 4 0 000 8z"/></svg>
            <svg id="icon-moon" class="w-5 h-5 hidden" viewBox="0 0 20 20" fill="currentColor"><path d="M17.293 13.293A8 8 0 016.707 2.707a8 8 0 1010.586 10.586z"/></svg>
          </button>

          <!-- Mobile menu button -->
          <button id="menu-toggle" class="md:hidden p-2 rounded-md bg-gray-100 dark:bg-gray-800" aria-label="Toggle menu">
            <svg id="menu-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="menu-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile menu -->
      <div id="mobile-menu" class="md:hidden hidden pb-4">
        <nav class="flex flex-col space-y-2">
          <a class="nav-link block px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800" href="#home">Home</a>
          <a class="nav-link block px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800" href="#about">About</a>
          <a class="nav-link block px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800" href="#projects">Projects</a>
          <a class="nav-link block px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800" href="#contact">Contact</a>
        </nav>
      </div>
    </div>
  </header>

  <!-- Page content -->
  <main class="container mx-auto px-4 py-12">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-100 dark:bg-gray-800 text-center py-8 mt-12">
    <div class="container mx-auto px-4">
      <p class="text-sm">&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
      <div class="mt-4 flex justify-center space-x-4">
        <a href="https://github.com/abeni-hub" class="hover:text-blue-500">GitHub</a>
        <a href="https://www.linkedin.com/in/abenezer-sileshi-50b9aa329/" class="hover:text-blue-500">LinkedIn</a>
        <a href="mailto:abinesilew@gmail.com" class="hover:text-blue-500">Gmail</a>
      </div>
    </div>
  </footer>

  @vite('resources/js/app.js')

  <!-- Minimal vanilla JS: mobile menu, dark mode (auto-detect + remember), active link highlighting -->
  <script>
    (function () {
      // Mobile menu toggle
      const menuToggle = document.getElementById('menu-toggle');
      const mobileMenu = document.getElementById('mobile-menu');
      const menuOpen = document.getElementById('menu-open');
      const menuClose = document.getElementById('menu-close');

      menuToggle.addEventListener('click', () => {
        const open = !mobileMenu.classList.contains('hidden');
        if (open) {
          mobileMenu.classList.add('hidden');
          menuOpen.classList.remove('hidden');
          menuClose.classList.add('hidden');
        } else {
          mobileMenu.classList.remove('hidden');
          menuOpen.classList.add('hidden');
          menuClose.classList.remove('hidden');
        }
      });

      // Theme (dark mode) auto-detect + toggle + persist
      const body = document.getElementById('body');
      const themeToggle = document.getElementById('theme-toggle');
      const iconSun = document.getElementById('icon-sun');
      const iconMoon = document.getElementById('icon-moon');

      function applyTheme(theme) {
        if (theme === 'dark') {
          document.documentElement.classList.add('dark');
          body.classList.add('dark');
          iconMoon.classList.remove('hidden');
          iconSun.classList.add('hidden');
        } else {
          document.documentElement.classList.remove('dark');
          body.classList.remove('dark');
          iconSun.classList.remove('hidden');
          iconMoon.classList.add('hidden');
        }
      }

      // initialize theme
      const saved = localStorage.getItem('theme');
      if (saved) {
        applyTheme(saved);
      } else {
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        applyTheme(prefersDark ? 'dark' : 'light');
      }

      themeToggle.addEventListener('click', () => {
        const isDark = document.documentElement.classList.contains('dark');
        const next = isDark ? 'light' : 'dark';
        localStorage.setItem('theme', next);
        applyTheme(next);
      });

      // Active nav link highlighting while scrolling
      const navLinks = Array.from(document.querySelectorAll('.nav-link'));
      const sections = navLinks
        .map(a => {
          const id = a.getAttribute('href');
          if (!id || !id.startsWith('#')) return null;
          const el = document.querySelector(id);
          return el ? { link: a, section: el } : null;
        })
        .filter(Boolean);

      if ('IntersectionObserver' in window) {
        const obs = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            const match = sections.find(s => s.section === entry.target);
            if (!match) return;
            if (entry.isIntersecting) {
              navLinks.forEach(l => l.classList.remove('text-blue-600', 'font-semibold'));
              match.link.classList.add('text-blue-600', 'font-semibold');
            }
          });
        }, { root: null, rootMargin: '-40% 0px -40% 0px', threshold: 0 });

        sections.forEach(s => obs.observe(s.section));
      } else {
        // fallback: highlight first link
        if (navLinks[0]) navLinks[0].classList.add('text-blue-600', 'font-semibold');
      }

      // Close mobile menu when clicking a link
      document.querySelectorAll('#mobile-menu .nav-link').forEach(a => {
        a.addEventListener('click', () => {
          mobileMenu.classList.add('hidden');
          menuOpen.classList.remove('hidden');
          menuClose.classList.add('hidden');
        });
      });
    })();
  </script>
</body>
</html>
