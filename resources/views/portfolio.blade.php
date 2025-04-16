<x-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 animate-fade-in">
                My Projects <span class="text-primary-500">🚀</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto animate-fade-in">
                A showcase of my technical expertise across AI, mobile development, and enterprise solutions.
            </p>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Professional Projects <span class="text-secondary-500">✨</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Highlights from my industry experience and academic work
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Plants App (CV Project) -->
                <a href="/projects/plants-app" class="project-card group">
                    <div class="relative overflow-hidden rounded-xl shadow-lg h-64">
          <img src="data:image/jpeg;base64,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" 
                             alt="Agriculture Diagnostic App" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-xl font-bold text-white">Agriculture Diagnostic App</h3>
                                <div class="tech-stack">
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">TensorFlow</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">React.js</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Python</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200">
                            AI-Powered Agricultural Tool
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            Diagnoses plant viruses, assesses harvest readiness, and tracks watering schedules using ML. Successfully presented at university graduation.
                        </p>
                    </div>
                </a>
                
                <!-- Vista Chatbot (CV Experience) -->
                <a href="/projects/ai-chatbot" class="project-card group">
                    <div class="relative overflow-hidden rounded-xl shadow-lg h-64">
          <img src="data:image/jpeg;base64,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" 
                             alt="AI Customer Support Chatbot" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-xl font-bold text-white">Enterprise Chatbot</h3>
                                <div class="tech-stack">
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Python</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">NLP</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">FastAPI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200">
                            AI Chatbot for Vista IT
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            Developed for Vista IT to handle customer queries with 98% accuracy. Integrated third-party tools for rapid deployment.
                        </p>
                    </div>
                </a>
                
                <!-- University Events System (CV Project) -->
                <a href="/projects/university-events" class="project-card group">
                    <div class="relative overflow-hidden rounded-xl shadow-lg h-64">
<img src="data:image/png;base64,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"               alt="University Events System" 
                             alt="University Events System" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-xl font-bold text-white">University Events System</h3>
                                <div class="tech-stack">
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">JavaScript</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">MySQL</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">ASP.NET</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200">
                            Web-based system that streamlined event creation and ticketing at KAU, improving registration efficiency by 40%.
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            Created a web-based system for event creation, ticketing, and management at King Abdulaziz University (KAU) which improved the registration process efficiency by 40%.
                        </p>
                    </div>
                </a>
                
                <!-- Royal Commission Project (CV Experience) -->
                <a href="/projects/royal-commission" class="project-card group">
                    <div class="relative overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Enterprise Software" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-xl font-bold text-white">Royal Commission Portal</h3>
                                <div class="tech-stack">
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Java</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Spring Boot</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Agile</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200">
                            Enterprise Notification System
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            on going to Develop accept/decline functionality and UI components for Jubail/Yanbu Commission, following Agile methodology.
                        </p>
                    </div>
                </a>
                
                <!-- Stock Inventory System (CV Project) -->
                <a href="/projects/inventory-system" class="project-card group">
                    <div class="relative overflow-hidden rounded-xl shadow-lg h-64">
                        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Inventory Management" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-xl font-bold text-white">Inventory System</h3>
                                <div class="tech-stack">
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">.NET</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">SQL</span>
                                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">C#</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200">
                            Stock Management Solution
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            Designed relational database architecture and tracking features for enterprise inventory operations.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Technical Skills Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Technical Proficiencies <span class="text-purple-500">🛠</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Aligned with my professional experience and certifications
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Programming -->
                <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        Languages
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                        <li class="flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span> Java/Python (Primary)</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span> JavaScript/TypeScript</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span> Dart/Kotlin</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span> C#/.NET</li>
                    </ul>
                </div>
                
                <!-- Frameworks -->
                <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        Frameworks
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                        <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span> Flutter/React</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span> Spring Boot/FastAPI</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span> TensorFlow/PyTorch</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span> Agile/Scrum</li>
                    </ul>
                </div>
                
                <!-- Cloud & DevOps -->
                <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                        Cloud & DevOps
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                        <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> AWS Certified</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Azure/Google Cloud</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Docker/Git CI/CD</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Wireshark Monitoring</li>
                    </ul>
                </div>
                
                <!-- Certifications -->
                <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Certifications
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                        <li class="flex items-center"><span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span> AWS Developer/DevOps</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span> Data Scientist (SDA)</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span> Microsoft Cloud/Dev</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span> Flutter Specialist</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Let's Build Something Great</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">
                I'm currently available for full-time roles and consulting projects in AI, mobile development, or enterprise solutions.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="mailto:Sulttan.m.b@hotmail.com" class="inline-flex items-center px-6 py-3 bg-white text-gray-900 font-medium rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1">
                    Email Me
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/sultan-bashammakh-b3680a168" class="inline-flex items-center px-6 py-3 border-2 border-white text-white font-medium rounded-lg hover:bg-white/10 transition-colors duration-300">
                    LinkedIn
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-layout>
