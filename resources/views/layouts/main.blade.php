<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faiz | UI/UX Designer & Graphic Designer</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @vite('resources/css/app.css')
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f172a; /* Slate 900 */
            color: #f8fafc; /* Slate 50 */
        }
        .bg-pattern {
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 2px, transparent 2px);
            background-size: 30px 30px;
        }
        h1, h2, h3, h4, h5, h6, .font-outfit {
            font-family: 'Outfit', sans-serif;
        }
        .glass-nav {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen bg-pattern">

<nav class="glass-nav fixed w-full z-50 top-0 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-bold font-outfit tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">
                    Faiz<span class="text-white">.</span>
                </a>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="/" class="hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Home</a>
                    <a href="/about" class="hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">About</a>
                    <a href="/portfolio" class="hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Portfolio</a>
                    <a href="/contact" class="hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Contact</a>
                    @auth
                        <a href="/admin" class="bg-blue-600/20 text-blue-400 border border-blue-500/30 hover:bg-blue-600/40 px-4 py-2 rounded-full text-sm font-medium transition-all duration-300">Admin Panel</a>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-red-400 hover:text-red-300 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" id="mobile-menu-btn" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-white hover:bg-slate-800 focus:outline-none transition-colors" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" id="menu-icon-closed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden hidden bg-slate-900 border-b border-slate-800 shadow-xl" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="hover:bg-slate-800 hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors">Home</a>
            <a href="/about" class="hover:bg-slate-800 hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors">About</a>
            <a href="/portfolio" class="hover:bg-slate-800 hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors">Portfolio</a>
            <a href="/contact" class="hover:bg-slate-800 hover:text-blue-400 block px-3 py-2 rounded-md text-base font-medium transition-colors">Contact</a>
            @auth
                <a href="/admin" class="bg-blue-600/20 text-blue-400 border border-blue-500/30 block px-3 py-2 rounded-md text-base font-medium mt-4">Admin Panel</a>
                <form action="{{ route('logout') }}" method="POST" class="inline block mt-2 w-full">
                    @csrf
                    <button type="submit" class="text-red-400 hover:bg-slate-800 block w-full text-left px-3 py-2 rounded-md text-base font-medium transition-colors">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>

<main class="flex-grow pt-20">
    @yield('content')
</main>

<footer class="bg-slate-900 border-t border-slate-800 py-8 mt-auto">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <div class="flex justify-center space-x-6 mb-4">
            <a href="https://www.instagram.com/fawwaiz_/" target="_blank" class="text-slate-400 hover:text-pink-500 transition-colors">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-slate-400 hover:text-blue-500 transition-colors">
                <span class="sr-only">LinkedIn</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="https://github.com/FairuzFaiz" target="_blank" class="text-slate-400 hover:text-white transition-colors">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <p class="text-slate-400 text-sm">© {{ date('Y') }} Faiz. Graphic Designer & UI/UX Developer. All rights reserved.</p>
    </div>
</footer>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        offset: 50,
        duration: 800,
        easing: 'ease-out-cubic',
    });

    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconClosed = document.getElementById('menu-icon-closed');
        const iconOpen = document.getElementById('menu-icon-open');

        if(btn) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                iconClosed.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
            });
        }
    });
</script>
</body>
</html>