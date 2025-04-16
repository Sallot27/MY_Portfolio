<x-layout>
<!-- Hero Section with Optimized Images -->
<section class="hero" style="background-image: url('https://images.pexels.com/photos/577585/pexels-photo-577585.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
  <div class="absolute inset-0 bg-black/30"></div>
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div class="animate-fade-in">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
          Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">Sultan Bashammakh</span>
        </h1>
        <div class="text-xl md:text-2xl text-gray-200 mb-8">
          <span id="typewriter" data-text='["Full Stack Developer", "AI Enthusiast", "Flutter Expert"]'></span>
          <span class="blinking-cursor">|</span>
        </div>
        <p class="text-lg text-gray-300 mb-8 max-w-lg">
          I build innovative digital solutions that solve real-world problems with cutting-edge technologies.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#projects" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            View My Work
          </a>
          <a href="#contact" class="px-6 py-3 border-2 border-white text-white font-medium rounded-lg hover:bg-white/10 transition-colors duration-300">
            Contact Me
          </a>
        </div>
      </div>
      <div class="relative animate-fade-in" style="animation-delay: 0.3s">
        <div class="w-full h-80 md:h-96 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-2xl shadow-xl overflow-hidden backdrop-blur-sm border border-white/10">
          <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" 
               alt="Developer workspace" 
               class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
               loading="lazy">
          <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-purple-400 rounded-full opacity-20 blur-xl animate-float"></div>
          <div class="absolute -top-6 -right-6 w-40 h-40 bg-blue-400 rounded-full opacity-20 blur-xl animate-float" style="animation-delay: 2s;"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Skills Section -->
<section id="skills" class="py-16 bg-white dark:bg-gray-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">My Expertise</h2>
      <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto"></div>
      <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto mt-4">
        I specialize in multiple technologies across the full stack development spectrum.
      </p>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Frontend Card -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 group">
        <div class="w-16 h-16 bg-blue-50 dark:bg-gray-700 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:bg-blue-100 dark:group-hover:bg-gray-600 transition-colors">
          <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold text-center text-gray-900 dark:text-white">Frontend</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400 text-center mt-2">React, Flutter, Tailwind</p>
      </div>
      
      <!-- Backend Card -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 group">
        <div class="w-16 h-16 bg-purple-50 dark:bg-gray-700 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:bg-purple-100 dark:group-hover:bg-gray-600 transition-colors">
          <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold text-center text-gray-900 dark:text-white">Backend</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400 text-center mt-2">Node.js, Django, .NET</p>
      </div>
      
      <!-- AI/ML Card -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 group">
        <div class="w-16 h-16 bg-blue-50 dark:bg-gray-700 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:bg-blue-100 dark:group-hover:bg-gray-600 transition-colors">
          <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold text-center text-gray-900 dark:text-white">AI/ML</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400 text-center mt-2">TensorFlow, PyTorch, NLP</p>
      </div>
      
      <!-- DevOps Card -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 group">
        <div class="w-16 h-16 bg-purple-50 dark:bg-gray-700 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:bg-purple-100 dark:group-hover:bg-gray-600 transition-colors">
          <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold text-center text-gray-900 dark:text-white">DevOps</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400 text-center mt-2">AWS, Docker, CI/CD</p>
      </div>
    </div>
  </div>
</section>

<!-- Featured Projects Section -->
<section id="projects" class="py-16 bg-gray-50 dark:bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Featured Projects</h2>
      <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto"></div>
      <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto mt-4">
        Some of my most recent and innovative projects.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Plants App -->
      <a href="#plants-app" class="group relative block overflow-hidden rounded-xl shadow-lg transition-transform duration-500 hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-9 h-64 w-full">
          <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80" 
               alt="Plants App" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
               loading="lazy">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
          <div>
            <h3 class="text-xl font-bold text-white">Plants Identification App</h3>
            <div class="flex flex-wrap gap-2 mt-2">
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">TensorFlow</span>
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Flutter</span>
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Python</span>
            </div>
          </div>
        </div>
      </a>
      
      <!-- University Events -->
      <a href="#university-events" class="group relative block overflow-hidden rounded-xl shadow-lg transition-transform duration-500 hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-9 h-64 w-full">
          <img src="https://images.unsplash.com/photo-1524179091875-b4949861a4d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
               alt="University Events System" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
               loading="lazy">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
          <div>
            <h3 class="text-xl font-bold text-white">University Events System</h3>
            <div class="flex flex-wrap gap-2 mt-2">
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">JavaScript</span>
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">MySQL</span>
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">ASP.NET</span>
            </div>
          </div>
        </div>
      </a>
      
      <!-- AI Chatbot -->
      <a href="#ai-chatbot" class="group relative block overflow-hidden rounded-xl shadow-lg transition-transform duration-500 hover:-translate-y-2">
        <div class="aspect-w-16 aspect-h-9 h-64 w-full">
          <img src="https://images.unsplash.com/photo-1655720828013-97b8956a3ac3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" 
               alt="AI Chatbot" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
               loading="lazy">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
          <div>
            <h3 class="text-xl font-bold text-white">AI Customer Support Chatbot</h3>
            <div class="flex flex-wrap gap-2 mt-2">
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Python</span>
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">NLP</span>
              <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Flask</span>
            </div>
          </div>
        </div>
      </a>
    </div>
    
    <div class="text-center mt-12">
      <a href="/portfolio" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
        View All Projects
        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </a>
    </div>
  </div>
</section>
    
<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-50 dark:bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Get In Touch</h2>
      <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto"></div>
      <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto mt-4">
        Have a project in mind? Let's discuss how I can help bring your ideas to life.
      </p>
    </div>
    
    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden max-w-4xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="p-8 md:p-12">
          <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send me a message</h3>
          <form class="space-y-6">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
              <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white transition-all" placeholder="Your name">
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
              <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white transition-all" placeholder="your@email.com">
            </div>
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Your Message</label>
              <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white transition-all" placeholder="Tell me about your project..."></textarea>
            </div>
            <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium rounded-lg shadow-lg hover:from-blue-600 hover:to-purple-700 transition-all duration-300 transform hover:-translate-y-1">
              Send Message
            </button>
          </form>
        </div>
        <div class="bg-gradient-to-br from-blue-500 to-purple-600 p-8 md:p-12 flex flex-col justify-center">
          <div class="text-white">
            <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
            <div class="space-y-4">
              <div class="flex items-start">
                <svg class="w-6 h-6 mr-4 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>sulttan.m.b@hotmail.com</span>
              </div>
              <div class="flex items-start">
                <svg class="w-6 h-6 mr-4 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span>+966 53 726 2930</span>
              </div>
              <div class="flex items-start">
                <svg class="w-6 h-6 mr-4 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Riyadh, Saudi Arabia</span>
              </div>
            </div>
            <div class="mt-8">
              <h4 class="text-lg font-semibold mb-4">Follow Me</h4>
              <div class="flex space-x-4">
                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                  </svg>
                </a>
                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                  </svg>
                </a>
                <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</x-layout>