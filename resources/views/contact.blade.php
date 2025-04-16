<x-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 animate-fade-in">
                Get In Touch <span class="text-primary-500">📩</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto animate-fade-in">
                Have a project in mind or want to collaborate? I'd love to hear from you!
            </p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="animate-slide-up">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg border border-gray-100 dark:border-gray-700">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                            Send Me a Message <span class="text-primary-500">✉</span>
                        </h2>
                        
                        <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name" required
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white transition-all"
                                       placeholder="Your name">
                            </div>
                            
                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white transition-all"
                                       placeholder="your@email.com">
                            </div>
                            
                            <!-- Subject Field -->
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Subject <span class="text-red-500">*</span>
                                </label>
                                <select id="subject" name="subject" required
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white transition-all">
                                    <option value="" disabled selected>Select a subject</option>
                                    <option value="project">Project Inquiry</option>
                                    <option value="collaboration">Collaboration</option>
                                    <option value="job">Job Opportunity</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <!-- Message Field -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <textarea id="message" name="message" rows="5" required
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white transition-all"
                                          placeholder="Tell me about your project..."></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <div>
                                <button type="submit" 
                                        class="w-full px-6 py-3 bg-gradient-to-r from-primary-500 to-secondary-500 text-white font-medium rounded-lg shadow-lg hover:from-primary-600 hover:to-secondary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300 transform hover:-translate-y-1">
                                    Send Message
                                </button>
                            </div>
                            
                            <!-- Status Message -->
                            <div id="form-status" class="hidden p-4 rounded-lg"></div>
                        </form>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="animate-slide-up" style="animation-delay: 0.2s">
                    <div class="bg-gradient-to-br from-primary-500 to-secondary-600 p-8 rounded-xl shadow-lg text-white h-full">
                        <h2 class="text-2xl font-bold mb-8">Contact Information <span class="text-white">📞</span></h2>
                        
                        <div class="space-y-6">
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-white/10 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Email</h3>
                                    <p class="text-white/90">sulttan.m.b@hotmail.com</p>
                                    <p class="text-sm text-white/70 mt-1">Typically responds within 24 hours</p>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-white/10 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Phone</h3>
                                    <p class="text-white/90">(+966) 0537262930</p>
                                    <p class="text-sm text-white/70 mt-1">Available 5PM , Monday to Friday</p>
                                </div>
                            </div>
                            
                            <!-- Social Media -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-white/10 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Social Media</h3>
                                    <div class="flex space-x-4">
                                        <a href="https://github.com/Sallot27" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                                            <span class="sr-only">GitHub</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="https://www.linkedin.com/in/sultan-bashammakh-b3680a168" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                                            <span class="sr-only">LinkedIn</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="https://twitter.com/@sallot0" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                                            <span class="sr-only">Twitter</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-primary-500 to-secondary-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to start your project? <span class="animate-bounce inline-block">👇</span></h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">
                Let's discuss how I can help bring your ideas to life with cutting-edge technology.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-white text-gray-900 font-medium rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1">
                Get In Touch
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </section>

    <script>
    document.getElementById('contact-form').addEventListener('submit', async function(e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);
        const statusElement = document.getElementById('form-status');

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                },
                body: formData
            });

            const result = await response.json();

            if (response.ok) {
                form.reset();
                statusElement.className = "p-4 rounded-lg bg-green-100 text-green-700";
                statusElement.textContent = result.message || "Message sent successfully!";
            } else {
                throw new Error(result.message || "An error occurred. Please try again.");
            }
        } catch (error) {
            statusElement.className = "p-4 rounded-lg bg-red-100 text-red-700";
            statusElement.textContent = error.message;
        }

        statusElement.classList.remove('hidden');
    });
</script>

</x-layout>
