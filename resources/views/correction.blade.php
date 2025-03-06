<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/archiver (1).png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Docugenie</title>
</head>
<body>
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

                    <a href="{{ route('logout') }}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80"> DECONNEXION </a>
                </div>

                <div class="lg:flex lg:items-center lg:justify-end lg:space-x-6 sm:ml-auto">
                    <a href="{{ route('showPost') }}" title="" class="inline-flex items-center justify-center px-3 sm:px-5 py-2.5 text-sm sm:text-base font-semibold transition-all duration-200 text-white bg-blue-600 rounded-lg" role="button"> POSTER </a>
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

    <main class="mt-[80px]">
        <section class="">
            <form action="{{ route('correction') }}" method="GET">
            <div class="w-1/2 mx-auto relative">
                <input type="text" name="search" x-model="search" placeholder="Rechercher..."
                    class="w-[100%] p-3 pl-10 text-gray-900 bg-white border border-gray-300 rounded-full shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50"/>
                <svg class="absolute left-3 top-3 w-5 h-5 text-gray-500"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0a7.5 7.5 0 1 0-1.06 1.06L21 21z"/>
                </svg>
            </div>
            </form>
            @foreach ($user as $users)
    @foreach ($users->posts as $posts)
        <div class="mt-7 flex flex-col items-center"> <!-- Centrage des posts -->
            <div class="flex items-center">
                <img src="{{ asset('images/utilisateur.png') }}" alt="" class="w-[14%] ml-3 md:w-[7%]">
                <div class="ml-3">
                    <p class="font-bold">{{ $users->pseudo }} . Posté à {{ $posts->created_at->format('H:i') }}</p>
                    <p>Publié le : {{ $posts->created_at->format('Y/m/d') }}</p>
                </div>
            </div>

            <div class="mt-3 w-3/4 md:w-1/2"> <!-- Réduction et centrage de la largeur -->
                <h2 class="font-bold text-[25px]">{{ $posts->libelle }}</h2>
                <div x-data="{ open: false }" class="w-full h-[300px] mt-5 rounded-lg flex justify-center items-center bg-gray-100">
                    <img src="{{ asset('storage/' . $posts->image) }}" alt="" class="w-full h-full object-contain cursor-pointer transition-transform duration-300 hover:scale-105" @click="open = true">
                    <div x-show="open" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center p-4" @click.away="open = false">
                        <img src="{{ asset('storage/' . $posts->image) }}" class="max-w-full max-h-[90vh] rounded-lg shadow-lg cursor-pointer" @click="open = false">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endforeach


{{ $user->links() }}

        </section>
    </main>
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
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>