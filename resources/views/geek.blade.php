<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/archiver (1).png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Docugénie</title>
</head>
<body>
<div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-10 w-full">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('images/archiver.png') }}" alt="" class="w-10">
                    </div>
                    <div>
                        <h1 class="font-bold mr-4 ml-2 text-[20px]">Docugénie</h1>
                    </div>
                </div>

                <div class="hidden lg:flex lg:items-center lg:justify-center lg:space-x-10 mt-1">
                    <a href="{{ route('index') }}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80"> ACEEUIL </a>

                    <a href="{{ route('archives') }}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80"> ARCHIVES </a>

                    <a href="{{ route('geek') }}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80"> TRUC-DE-GEEK </a>

                    <a href="{{ route('registration') }}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80"> CORRECTION </a>
                </div>

                <div class="lg:flex lg:items-center lg:justify-end lg:space-x-6 sm:ml-auto">
                    <a href="{{ route('contact') }}" title="" class="inline-flex items-center justify-center px-3 sm:px-5 py-2.5 text-sm sm:text-base font-semibold transition-all duration-200 text-white bg-blue-600 rounded-lg" role="button"> CONTACTS </a>
                </div>

                <!-- Hamburger Icon -->
                <button type="button" class="inline-flex p-2 ml-1 text-black transition-all duration-200 rounded-md sm:ml-4 lg:hidden focus:bg-gray-800 hover:bg-gray-800" id="hamburger-button">
                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu (Initially Hidden) -->
    <div id="mobile-menu" class="lg:hidden fixed inset-0 z-20 p-4 relative w-full h-full bg-white bg-opacity-60 backdrop-blur-lg p-4 rounded-lg">
        <div class="flex justify-between items-center">
            <a href="#" title="" class="flex">
            <div>
                        <img src="{{ asset('images/archiver.png') }}" alt="" class="w-10">
                    </div>
                    <div>
                        <h1 class="font-bold mr-4 ml-2 text-[20px] mt-2">Docugénie</h1>
                    </div>
            </a>
            <button type="button" class="p-2 text-black" id="close-button">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-4 space-y-4">
            <a href="{{ route('index') }}" class="block text-base text-black py-2 hover:text-opacity-80"> ACCEUIL </a>
            <a href="{{ route('archives') }}" class="block text-base text-black py-2 hover:text-opacity-80"> ARCHIVES </a>
            <a href="{{ route('geek') }}" class="block text-base text-black py-2 hover:text-opacity-80"> TRUC-DE-GEEK </a>
            <a href="{{ route('registration') }}" class="block text-base text-black py-2 hover:text-opacity-80"> CORRECTIONS </a>
            <!-- Move Apply Button Here -->
            <a href="{{ route('contact') }}" title="" class="inline-flex items-center justify-center px-6 py-4 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-lg sm:mt-16 hover:bg-blue-700 focus:bg-blue-700">
                CONTACTS
            </a>
        </div>
    </div>

    <section class="relative lg:min-h-screen pt-16 pb-5 sm:pt-40 sm:pb-16 lg:pb-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative z-20">
            <div class="max-w-xl mx-auto text-center">
                <h1 class="text-4xl font-bold sm:text-6xl">
                    <span class="text-blue-600">TRUK-DE-GEEK Miage/GI</span>
                </h1>
                <p class="mt-5 text-base text-black sm:text-xl">Plus besoin de chercher des documents partout!Avec DocuGenie, accédez facilement aux archives de votre département.</p>

                <a href="#bloc" title="" class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-lg sm:mt-16 hover:bg-blue-700 focus:bg-blue-700" role="button">
                    COMMENCER
                    <svg class="w-6 h-6 ml-3 -mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>

<section class="py-10 bg-gray-50 sm:py-16 lg:py-24"  id="bloc">
    <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:items-stretch md:grid-cols-2 gap-y-8 gap-x-12 xl:gap-x-20">
            <div class="relative">
                <div class="aspect-w-4 aspect-h-3 mt-3">
                    <video controls poster class="w-[100%]" preload="auto">
                        <source src="{{ asset('videos/yango-integration.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="flex flex-col justify-between md:py-14">
                <blockquote>
                    <p class="text-2xl leading-relaxed text-black">Installer joanna.h est un jeu d'enfant. Il suffit d'ajouter les fichiers et tout fonctionne instantanément. Simple, rapide et efficace !
</p>
                </blockquote>

                <div class="mt-6 lg:mt-auto">
                    <p class="text-xl font-semibold text-black">Ethan Bokamé</p>
                    <p class="mt-2 text-base text-gray-600">Créateur Jonah.h</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="w-full max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-6 border-t border-gray-200 dark:border-neutral-700">
        <div class="flex flex-wrap justify-between items-center gap-2">
        <div>
            <p class="text-xs text-gray-600 dark:text-neutral-400">
            © 2025 Ducugénie.
            </p>
        </div>
        <ul class="flex flex-wrap items-center">
            <li class="inline-block relative pe-4 text-xs last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-1.5 before:-translate-y-1/2 before:size-[3px] before:rounded-full before:bg-gray-400 dark:text-neutral-500 dark:before:bg-neutral-600">
            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400" href="https://www.linkedin.com/in/monneka-ange-eloge-kohou-143415327/">
                Linkedin
            </a>
            </li>
        <li class="inline-block relative pe-4 text-xs last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-1.5 before:-translate-y-1/2 before:size-[3px] before:rounded-full before:bg-gray-400 dark:text-neutral-500 dark:before:bg-neutral-600">
            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400" href="https://portfolio.elogekohou.site/">
            portfolio
            </a>
        </li>
        <li class="inline-block pe-4 text-xs">
            <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400" href="#">
            Github
            </a>
        </li>
        </li>
    </ul>
    </div>
</div>
</footer>

<script>
    const hamburgerButton = document.getElementById('hamburger-button');
    const closeButton = document.getElementById('close-button');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerButton.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    closeButton.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
</script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
