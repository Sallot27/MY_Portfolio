<x-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 animate-fade-in">
                My Skills <span class="text-primary-500">🛠</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto animate-fade-in">
                Technologies I work with to bring ideas to life
            </p>
        </div>
    </section>

    <!-- Skills Grid -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Frontend Skills -->
                <div class="animate-slide-up">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700 h-full">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-3">
                                <span class="text-xl">🖥</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Frontend</h3>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" 
                                     alt="React" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">React</span>
                            </div>
                            <div class="flex items-center">
                                <img src="data:image/png;base64,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" 
                                     alt="Tailwind" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Tailwind CSS</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" 
                                     alt="JavaScript" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">JavaScript</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" 
                                     alt="TypeScript" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">TypeScript</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Backend Skills -->
                <div class="animate-slide-up" style="animation-delay: 0.1s">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700 h-full">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mr-3">
                                <span class="text-xl">⚙</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Backend</h3>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" 
                                     alt="Node.js" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Node.js</span>
                            </div>
                            <div class="flex items-center">
                                <img src="data:image/png;base64,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" 
                                     alt="Laravel" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Laravel</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain.svg" 
                                     alt="Django" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Django</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" 
                                     alt="Python" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Python</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Database Skills -->
                <div class="animate-slide-up" style="animation-delay: 0.2s">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700 h-full">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mr-3">
                                <span class="text-xl">🗃</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Databases</h3>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" 
                                     alt="MongoDB" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">MongoDB</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" 
                                     alt="PostgreSQL" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">PostgreSQL</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" 
                                     alt="MySQL" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">MySQL</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" 
                                     alt="Firebase" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Firebase</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- DevOps Skills -->
                <div class="animate-slide-up" style="animation-delay: 0.3s">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700 h-full">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg flex items-center justify-center mr-3">
                                <span class="text-xl">🚀</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">DevOps</h3>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" 
                                     alt="Docker" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Docker</span>
                            </div>
                            <div class="flex items-center">
                                <img src="data:image/png;base64,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" 
                                     alt="AWS" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">AWS</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" 
                                     alt="Git" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Git</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- AI/ML Skills -->
                <div class="animate-slide-up" style="animation-delay: 0.4s">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700 h-full">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center mr-3">
                                <span class="text-xl">🧠</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">AI/ML</h3>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg" 
                                     alt="TensorFlow" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">TensorFlow</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/pytorch/pytorch-original.svg" 
                                     alt="PyTorch" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">PyTorch</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/pandas/pandas-original.svg" 
                                     alt="Pandas" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Pandas</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/numpy/numpy-original.svg" 
                                     alt="NumPy" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">NumPy</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jupyter/jupyter-original.svg" 
                                     alt="Jupyter" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Jupyter</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Skills -->
                <div class="animate-slide-up" style="animation-delay: 0.5s">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700 h-full">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center mr-3">
                                <span class="text-xl">📱</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Mobile</h3>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" 
                                     alt="Flutter" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Flutter</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" 
                                     alt="React Native" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">React Native</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" 
                                     alt="Swift" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Swift</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" 
                                     alt="Kotlin" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Kotlin</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/android/android-original.svg" 
                                     alt="Android" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Android</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Design Skills -->
                <div class="animate-slide-up" style="animation-delay: 0.6s">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700 h-full">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-pink-100 dark:bg-pink-900/30 rounded-lg flex items-center justify-center mr-3">
                                <span class="text-xl">🎨</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Design</h3>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" 
                                     alt="Figma" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Figma</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg" 
                                     alt="Photoshop" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Photoshop</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/xd/xd-plain.svg" 
                                     alt="XD" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Adobe XD</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sketch/sketch-original.svg" 
                                     alt="Sketch" 
                                     class="w-6 h-6 mr-2"
                                     loading="lazy">
                                <span class="text-gray-600 dark:text-gray-300">Sketch</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>