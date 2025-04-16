<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Creative portfolio of Sultan Bashammakh - Full Stack Developer & AI Enthusiast">

        <title>{{ config('app.name') }} - {{ $title ?? 'Home' }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/SB.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|space-grotesk:400,500,600" rel="stylesheet" />

        <!-- Animate.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
          tailwind.config = {
            darkMode: 'class',
            theme: {
              extend: {
                colors: {
                  primary: {
                    50: '#f0f9ff',
                    100: '#e0f2fe',
                    500: '#3b82f6',
                    600: '#2563eb',
                    700: '#1d4ed8',
                  },
                  secondary: {
                    400: '#a78bfa',
                    500: '#8b5cf6',
                    600: '#7c3aed',
                  },
                  dark: {
                    800: '#1e293b',
                    900: '#0f172a',
                  }
                },
                fontFamily: {
                  sans: ['Instrument Sans', 'sans-serif'],
                  heading: ['Space Grotesk', 'sans-serif'],
                },
                animation: {
                  'fade-in': 'fadeIn 0.8s ease-in-out',
                  'slide-up': 'slideUp 0.8s ease-out',
                  'float': 'float 6s ease-in-out infinite',
                  'gradient-x': 'gradientX 8s ease infinite',
                  'gradient-xy': 'gradientXY 8s ease infinite',
                  'glow': 'glow 2s ease-in-out infinite alternate',
                },
                keyframes: {
                  fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                  },
                  slideUp: {
                    '0%': { transform: 'translateY(40px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                  },
                  float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-20px)' },
                  },
                  gradientX: {
                    '0%, 100%': { 'background-position': '0% 50%' },
                    '50%': { 'background-position': '100% 50%' },
                  },
                  gradientXY: {
                    '0%, 100%': { 'background-position': '0% 50%' },
                    '50%': { 'background-position': '100% 50%' },
                  },
                  glow: {
                    '0%': { 'text-shadow': '0 0 5px rgba(59, 130, 246, 0.5)' },
                    '100%': { 'text-shadow': '0 0 15px rgba(59, 130, 246, 0.8)' },
                  }
                }
              },
            },
          };
        </script>
        <style>
          .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(90deg, #3b82f6, #8b5cf6);
          }
          
          .skill-pill {
            transition: all 0.3s ease;
          }
          .skill-pill:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 4px 15px -5px rgba(0, 0, 0, 0.2);
          }
          
          .project-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            perspective: 1000px;
          }
          .project-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
          }
          .project-card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
          }
          .project-card:hover .project-card-inner {
            transform: rotateY(5deg) rotateX(5deg);
          }
          
          .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
          }
          .shape {
            position: absolute;
            opacity: 0.1;
            filter: blur(40px);
            animation: float 15s infinite linear;
          }
          .shape-1 {
            width: 300px;
            height: 300px;
            background: #3b82f6;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
          }
          .shape-2 {
            width: 400px;
            height: 400px;
            background: #8b5cf6;
            bottom: 10%;
            right: 10%;
            animation-delay: 5s;
          }
          .shape-3 {
            width: 250px;
            height: 250px;
            background: #10b981;
            top: 50%;
            left: 30%;
            animation-delay: 10s;
          }
          
          .timeline-item::before {
            content: '';
            position: absolute;
            left: -38px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #3b82f6;
            border: 4px solid #e2e8f0;
          }
          .dark .timeline-item::before {
            border-color: #1e293b;
          }
          
          .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
          }
          
          .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
          
          .gradient-border {
            position: relative;
          }
          .gradient-border::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            padding: 2px;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
          }
        </style>
    </head>
    <body class="min-h-full bg-white dark:bg-gray-900 transition-colors duration-300 flex flex-col font-sans">
      <!-- Floating background shapes -->
      <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
      </div>
      
      <!-- Navigation -->
      <nav class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 sticky top-0 z-50 shadow-sm">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                  <img class="h-8 w-8" src="{{ asset('assets/SB.png') }}" alt="SB">
                </a>
              </div>
              
              <!-- Desktop Navigation -->
              <div class="hidden md:block ml-10">
                <div class="flex items-baseline space-x-6">
                  <a href="/" class="{{ request()->is('/') ? 'text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400' }} px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 font-medium">Home</a>
                  <a href="/about" class="{{ request()->is('about') ? 'text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400' }} px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 font-medium">About</a>
                  <a href="/portfolio" class="{{ request()->is('portfolio') ? 'text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400' }} px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 font-medium">Portfolio</a>
                  <a href="/skills" class="{{ request()->is('skills') ? 'text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400' }} px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 font-medium">Skills</a>
                  <a href="/contact" class="{{ request()->is('contact') ? 'text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400' }} px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 font-medium">Contact</a>
                  <a href="/blog" class="{{ request()->is('blog') ? 'text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400' }} px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 font-medium">Blog</a>
                  <a href="/service" class="{{ request()->is('service') ? 'text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400' }} px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 font-medium">Service</a>

                </div>
              </div>
            </div>
            
            <!-- Right side controls -->
            <div class="hidden md:flex items-center space-x-4">
              <!-- Social Links -->
              <div class="flex space-x-3">
                <a href="https://github.com/Sallot27" target="_blank" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-200">
                  <span class="sr-only">GitHub</span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="https://www.linkedin.com/in/sultan-bashammakh-b3680a168" target="_blank" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-200">
                  <span class="sr-only">LinkedIn</span>
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
              
              <!-- Dark mode toggle -->
              <button id="dark-mode-toggle" type="button" class="p-2 rounded-full text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-200 focus:outline-none">
                <span class="sr-only">Toggle dark mode</span>
                <svg id="dark-mode-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path id="dark-mode-icon-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-9h-1M4.34 12h-1m15.07 6.07l-.7-.7M6.34 6.34l-.7-.7m12.02 12.02l-.7-.7M6.34 17.66l-.7-.7M12 5a7 7 0 0 0 0 14 7 7 0 0 0 0-14z"></path>
                </svg>
              </button>
              
              <!-- Contact button -->
              <a href="/contact" class="hidden lg:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-primary-500 to-secondary-500 hover:from-primary-600 hover:to-secondary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300">
                Let's Talk
              </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
              <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500 transition-colors duration-200" id="mobile-menu-button" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="hidden md:hidden" id="mobile-menu">
          <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="{{ request()->is('/') ? 'bg-gray-100 dark:bg-gray-800 text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">Home</a>
            <a href="/about" class="{{ request()->is('about') ? 'bg-gray-100 dark:bg-gray-800 text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">About</a>
            <a href="/portfolio" class="{{ request()->is('portfolio') ? 'bg-gray-100 dark:bg-gray-800 text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">Portfolio</a>
            <a href="/skills" class="{{ request()->is('skills') ? 'bg-gray-100 dark:bg-gray-800 text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">Skills</a>
            <a href="/contact" class="{{ request()->is('contact') ? 'bg-gray-100 dark:bg-gray-800 text-primary-600 dark:text-primary-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">Contact</a>
          </div>
          <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-800">
            <div class="flex items-center px-5">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="{{ asset('img/profile.jpg') }}" alt="Sultan Bashammakh">
              </div>
              <div class="ml-3">
                <div class="text-base font-medium text-gray-800 dark:text-white">Sultan Bashammakh</div>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-400">(+966) 0537262930</div>
              </div>
            </div>
            <div class="mt-3 px-2 space-y-1">
              <a href="https://github.com/Sallot27" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800 transition-colors duration-200 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
                GitHub
              </a>
              <a href="https://www.linkedin.com/in/sultan-bashammakh-b3680a168" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800 transition-colors duration-200 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                </svg>
                LinkedIn
              </a>
              <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gradient-to-r from-primary-500 to-secondary-500 hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 text-center">
                Contact Me
              </a>
            </div>
          </div>
        </div>
      </nav>

      <!-- Page content -->
      <main class="flex-grow">
        {{ $slot }}
      </main>

      <!-- Footer -->
      <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
          <div class="md:flex md:items-center md:justify-between">
            <div class="flex justify-center md:order-2 space-x-6">
              <a href="https://github.com/Sallot27" target="_blank" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-200">
                <span class="sr-only">GitHub</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/sultan-bashammakh-b3680a168" target="_blank" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors duration-200">
                <span class="sr-only">LinkedIn</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
            <div class="mt-8 md:order-1 md:mt-0">
              <p class="text-center text-sm text-gray-600 dark:text-gray-400">
                &copy; {{ date('Y') }} Sultan Bashammakh. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </footer>

      <script>
        // Enhanced dark mode toggle
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        const htmlElement = document.documentElement;
        const darkModeIconPath = document.getElementById('dark-mode-icon-path');
        
        // Check for saved preference or use system preference
        const savedDarkMode = localStorage.getItem('darkMode');
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
        
        function setDarkMode(isDark) {
          if (isDark) {
            htmlElement.classList.add('dark');
            darkModeIconPath.setAttribute('d', 'M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z');
          } else {
            htmlElement.classList.remove('dark');
            darkModeIconPath.setAttribute('d', 'M12 3v1m0 16v1m8.66-9h-1M4.34 12h-1m15.07 6.07l-.7-.7M6.34 6.34l-.7-.7m12.02 12.02l-.7-.7M6.34 17.66l-.7-.7M12 5a7 7 0 0 0 0 14 7 7 0 0 0 0-14z');
          }
          localStorage.setItem('darkMode', isDark ? 'true' : 'false');
        }
        
        // Initialize dark mode
        if (savedDarkMode === 'true' || (savedDarkMode === null && prefersDarkScheme.matches)) {
          setDarkMode(true);
        } else {
          setDarkMode(false);
        }
        
        // Toggle dark mode
        darkModeToggle.addEventListener('click', () => {
          const isDark = htmlElement.classList.contains('dark');
          setDarkMode(!isDark);
        });
        
        // Watch for system preference changes
        prefersDarkScheme.addEventListener('change', (e) => {
          if (localStorage.getItem('darkMode') === null) {
            setDarkMode(e.matches);
          }
        });
        
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
          const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
          mobileMenuButton.setAttribute('aria-expanded', !expanded);
          mobileMenu.classList.toggle('hidden');
          
          // Toggle between menu and close icons
          const menuIcon = mobileMenuButton.querySelector('.block');
          const closeIcon = mobileMenuButton.querySelector('.hidden');
          menuIcon.classList.toggle('hidden');
          menuIcon.classList.toggle('block');
          closeIcon.classList.toggle('hidden');
          closeIcon.classList.toggle('block');
        });
        
        // Scroll animations
        const animateOnScroll = () => {
          const elements = document.querySelectorAll('.animate-on-scroll');
          elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            const isVisible = (elementTop < window.innerHeight) && (elementBottom >= 0);
            
            if (isVisible) {
              element.classList.add('animate_animated', 'animate_fadeInUp');
            }
          });
        };
        
        // Initialize scroll animations
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
        
        // Typewriter effect for hero section
        const typeWriter = (element, text, i = 0) => {
          if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(() => typeWriter(element, text, i), 100);
          }
        };
        
        // Initialize typewriter effect if element exists
        const typeWriterElement = document.getElementById('typewriter');
        if (typeWriterElement) {
          const text = typeWriterElement.getAttribute('data-text');
          typeWriterElement.innerHTML = '';
          setTimeout(() => typeWriter(typeWriterElement, text), 1000);
        }
      </script>
    </body>
</html>