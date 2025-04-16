<x-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 animate-fade-in">
                My Blog <span class="text-primary-500">✍</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto animate-fade-in">
                Thoughts on development, design, and tech industry trends
            </p>
        </div>
    </section>

    <!-- Featured Post -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Featured Post <span class="text-secondary-500">🌟</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    My latest and most popular article
                </p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden max-w-4xl mx-auto">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 md:w-1/3">
                        <img class="h-full w-full object-cover" 
                             src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Featured post"
                             loading="lazy">
                    </div>
                    <div class="p-8 md:w-2/3">
                        <div class="uppercase tracking-wide text-sm text-primary-600 dark:text-primary-400 font-semibold mb-1">
                            Web Development
                        </div>
                        <a href="/blog/post-1" class="block mt-1 text-2xl font-semibold text-gray-900 dark:text-white hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-200">
                            The Future of React in 2023
                        </a>
                        <p class="mt-3 text-gray-600 dark:text-gray-300">
                            Exploring the upcoming features in React 18 and how they'll change the way we build applications. Learn about concurrent rendering, server components, and more.
                        </p>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" 
                                     src="{{ asset('assets/cinon.jpg') }}" 
                                     alt="Sultan Bashammakh"
                                     loading="lazy">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Sultan Bashammakh</p>
                                <div class="flex space-x-1 text-sm text-gray-500 dark:text-gray-400">
                                    <time datetime="2023-05-16">May 16, 2023</time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>8 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Latest Articles <span class="text-primary-500">📚</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Fresh perspectives on technology and development
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Post 1 -->
                <article class="bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-fade-in">
                    <a href="/blog/post-2" class="block">
                        <img class="w-full h-48 object-cover" 
                             src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Post thumbnail"
                             loading="lazy">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
                                    AI/ML
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">5 min read</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                                Building AI Applications with TensorFlow.js
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Learn how to bring machine learning to the browser with practical examples and use cases.
                            </p>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-500 dark:text-gray-400">Jun 2, 2023</span>
                                <svg class="ml-auto w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
                
                <!-- Post 2 -->
                <article class="bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.1s">
                    <a href="/blog/post-3" class="block">
                        <img class="w-full h-48 object-cover" 
                             src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Post thumbnail"
                             loading="lazy">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-400">
                                    DevOps
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">10 min read</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                                Kubernetes for Small Projects: Is It Worth It?
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Exploring when Kubernetes makes sense for small-scale applications and when it might be overkill.
                            </p>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-500 dark:text-gray-400">May 28, 2023</span>
                                <svg class="ml-auto w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
                
                <!-- Post 3 -->
                <article class="bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.2s">
                    <a href="/blog/post-4" class="block">
                        <img class="w-full h-48 object-cover" 
                             src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" 
                             alt="Post thumbnail"
                             loading="lazy">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                    Web Dev
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">7 min read</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                                The Power of Web Components in 2023
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                How web components have evolved and why they're becoming a viable alternative to frameworks.
                            </p>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-500 dark:text-gray-400">May 21, 2023</span>
                                <svg class="ml-auto w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
                
                <!-- Post 4 -->
                <article class="bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.3s">
                    <a href="/blog/post-5" class="block">
                        <img class="w-full h-48 object-cover" 
                             src="https://images.unsplash.com/photo-1626785774573-4b799315345d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" 
                             alt="Post thumbnail"
                             loading="lazy">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">
                                    Database
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">12 min read</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                                PostgreSQL vs MongoDB: When to Use Each
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                A comprehensive comparison of these popular databases with real-world use cases.
                            </p>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-500 dark:text-gray-400">May 14, 2023</span>
                                <svg class="ml-auto w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
                
                <!-- Post 5 -->
                <article class="bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.4s">
                    <a href="/blog/post-6" class="block">
                        <img class="w-full h-48 object-cover" 
                             src="https://images.unsplash.com/photo-1629909613657-0fa4185d62c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Post thumbnail"
                             loading="lazy">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">
                                    Mobile
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">6 min read</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                                Flutter 3.0: What's New and Exciting
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Exploring the latest features in Flutter 3.0 and how they improve cross-platform development.
                            </p>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-500 dark:text-gray-400">May 7, 2023</span>
                                <svg class="ml-auto w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
                
                <!-- Post 6 -->
                <article class="bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-fade-in" style="animation-delay: 0.5s">
                    <a href="/blog/post-7" class="block">
                        <img class="w-full h-48 object-cover" 
                             src="https://images.unsplash.com/photo-1581093196279-c8473435fe74?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Post thumbnail"
                             loading="lazy">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900/30 dark:text-indigo-400">
                                    Career
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">9 min read</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                                Transitioning from Web to Mobile Development
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                My journey and lessons learned moving from web to mobile development.
                            </p>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-500 dark:text-gray-400">Apr 30, 2023</span>
                                <svg class="ml-auto w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
            
            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-primary-500 to-secondary-500 hover:from-primary-600 hover:to-secondary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300 transform hover:-translate-y-1">
                    View All Articles
                    <svg class="ml-3 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gradient-to-r from-primary-500 to-secondary-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Subscribe to My Newsletter <span class="text-white">📬</span></h2>
                <p class="text-xl mb-8">
                    Get the latest articles, tutorials, and project updates straight to your inbox.
                </p>
                <form class="mt-6 sm:flex sm:max-w-md mx-auto">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input type="email" name="email-address" id="email-address" autocomplete="email" required
                           class="w-full px-5 py-3 placeholder-gray-500 focus:ring-2 focus:ring-offset-2 focus:ring-white focus:border-white sm:max-w-xs rounded-md border-0 text-gray-900"
                           placeholder="Enter your email">
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit"
                                class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all duration-300 transform hover:-translate-y-1">
                            Subscribe
                        </button>
                    </div>
                </form>
                <p class="mt-3 text-sm text-white/80">
                    I respect your privacy. Unsubscribe at any time.
                </p>
            </div>
        </div>
    </section>
</x-layout>