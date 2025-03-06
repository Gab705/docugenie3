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
                    <span class="text-blue-600">Bienvenue Sur Archive Miage/GI</span>
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
<section class="">

<div x-data="{
    search: '',
    items: [
        { 
            title: 'Recceuil', 
            text: 'CamScanner-25-12-2023-10.56',
            pdf: '{{ asset('archive/CamScanner-25-12-2023-10.56.pdf') }}'
        },
        { 
            title: 'Merise', 
            text: 'Devoir_merise',
            pdf: '{{ asset('archive/Devoir_merise.pdf') }}'
        },
        { 
            title: 'Algèbre 1', 
            text: 'Devoir_Surveillé_Algebre_1',
            pdf: '{{ asset('archive/Devoir_Surveillé_Algebre_1.pdf') }}'
        },
        { 
            title: 'Technique Expression', 
            text: 'Devoir_TE',
            pdf: '{{ asset('archive/Devoir_TE.pdf') }}'
        },
        { 
            title: 'Examen_Algebre_1', 
            text: 'Examen_Algebre_1',
            pdf: '{{ asset('archive/Examen_Algebre_1.pdf') }}'
        },
        { 
            title: 'Algebre_2(Semestre 2)', 
            text: 'Examen_Algebre_1',
            pdf: '{{ asset('archive/Examen_Algebre_2(Semestre 2).pdf') }}'
        },
        { 
            title: 'Algo_de_base', 
            text: 'Examen_Algo_de_base',
            pdf: '{{ asset('archive/Examen_Algo_de_base.pdf') }}'
        },
        { 
            title: 'Analyse_1', 
            text: 'Examen_Analyse_1',
            pdf: '{{ asset('archive/Examen_Analyse_1.pdf') }}'
        },
        { 
            title: 'Combiantoire_et_Probablités', 
            text: 'Examen_Combiantoire_et_Probablités(semestre 2)',
            pdf: '{{ asset('archive/Examen_Combiantoire_et_Probablités(semestre 2).pdf') }}'
        },
        { 
            title: 'Dev_perso', 
            text: 'Examen_Dev_perso',
            pdf: '{{ asset('archive/Examen_Dev_perso.pdf') }}'
        },
        { 
            title: 'Droit_(Smestre 2)', 
            text: 'Examen_Droit_(Smestre 2)',
            pdf: '{{ asset('archive/Examen_Droit_(Smestre 2).pdf') }}'
        },
        { 
            title: 'Electricité', 
            text: 'Examen_Electricité',
            pdf: '{{ asset('archive/Examen_Electricité.pdf') }}'
        },
        { 
            title: 'Electronique_Analogique', 
            text: 'Examen_Electronique_Analogique',
            pdf: '{{ asset('archive/Examen_Electronique_Analogique.pdf') }}'
        },
        { 
            title: 'Electtonique_Numerique', 
            text: 'Examen_Electtonique_Numerique',
            pdf: '{{ asset('archive/Examen_Electtonique_Numerique.pdf') }}'
        },
        { 
            title: 'Gestion_De_Projet_(Semestre2)', 
            text: 'Examen_Gestion_De_Projet_(Semestre2)',
            pdf: '{{ asset('archive/Examen_Gestion_De_Projet_(Semestre2).pdf') }}'
        },
        { 
            title: 'Lagage_Python(Semestre 2)', 
            text: 'Examen_Lagage_Python(Semestre 2)',
            pdf: '{{ asset('archive/Examen_Lagage_Python(Semestre 2).pdf') }}'
        },
        { 
            title: 'Merise_(semestre 2)', 
            text: 'Examen_Merise_(semestre 2)',
            pdf: '{{ asset('archive/Examen_Merise_(semestre 2).pdf') }}'
        },
        { 
            title: 'Statistique_Descriptive_(semestre 2)', 
            text: 'Examen_Statistique_Descriptive_(semestre 2)',
            pdf: '{{ asset('archive/Examen_Statistique_Descriptive_(semestre 2).pdf') }}'
        },
        { 
            title: 'Electricité2', 
            text: 'Exercice_1_Electricité',
            pdf: '{{ asset('archive/Exercice_1_Electricité.pdf') }}'
        },
        { 
            title: 'Exercice_2_Analyse _1', 
            text: 'Exercice_2_Analyse _1',
            pdf: '{{ asset('archive/Exercice_2_Analyse _1.pdf') }}'
        },
        { 
            title: 'Electricité3', 
            text: 'Exercice_2_Electricité',
            pdf: '{{ asset('archive/Exercice_2_Electricité.pdf') }}'
        },
        { 
            title: '3_Analyse _1', 
            text: 'Exercice_3_Analyse _1',
            pdf: '{{ asset('archive/Exercice_3_Analyse _1.pdf') }}'
        },
        { 
            title: '4_Analyse _1', 
            text: 'Exercice_4_Analyse _1',
            pdf: '{{ asset('archive/Exercice_4_Analyse _1.pdf') }}'
        },
        { 
            title: '5_Analyse _1', 
            text: 'Exercice_5_Analyse _1',
            pdf: '{{ asset('archive/Exercice_5_Analyse _1.pdf') }}'
        },
        { 
            title: '6_Analyse _1', 
            text: 'Exercice_6_Analyse _1',
            pdf: '{{ asset('archive/Exercice_6_Analyse _1.pdf') }}'
        },
        { 
            title: '7_Analyse _1', 
            text: 'Exercice_7_Analyse _1',
            pdf: '{{ asset('archive/Exercice_7_Analyse _1.pdf') }}'
        },
        { 
            title: 'Exercice_Analyse', 
            text: 'Exercice_Analyse_1',
            pdf: '{{ asset('archive/Exercice_Analyse_1.pdf') }}'
        },
        { 
            title: 'exercices_algorithme', 
            text: 'exercices_corrigés_algorithme',
            pdf: '{{ asset('archive/exercices_corrigés_algorithme.pdf') }}'
        },
        { 
            title: 'exercices-python3', 
            text: 'exercices-python3',
            pdf: '{{ asset('archive/exercices-python3.pdf') }}'
        },
        { 
            title: 'Interoogation_Electronique_Analogique', 
            text: 'Interoogation_Electronique_Analogique',
            pdf: '{{ asset('archive/Interoogation_Electronique_Analogique.pdf') }}'
        },
        { 
            title: 'Interrogation_ATO', 
            text: 'Interrogation_ATO',
            pdf: '{{ asset('archive/Interrogation_ATO.pdf') }}'
        },
        { 
            title: 'Interrogation_Electricité', 
            text: 'Interrogation_Electricité',
            pdf: '{{ asset('archive/Interrogation_Electricité.pdf') }}'
        },
        { 
            title: 'Interrogation_Reseau (Semestre 2)', 
            text: 'Interrogation_Reseau (Semestre 2)',
            pdf: '{{ asset('archive/Interrogation_Reseau (Semestre 2).pdf') }}'
        },
        { 
            title: 'Ma_Documentation_WindowsServer2019', 
            text: 'Ma_Documentation_WindowsServer2019',
            pdf: '{{ asset('archive/Ma_Documentation_WindowsServer2019.pdf') }}'
        },
        { 
            title: 'Momento_Electricité', 
            text: 'Momento_Electricité',
            pdf: '{{ asset('archive/Momento_Electricité.pdf') }}'
        },
        { 
            title: 'PolyExoC_MM', 
            text: 'PolyExoC_MM',
            pdf: '{{ asset('archive/PolyExoC_MM.pdf') }}'
        },
        { 
            title: 'sujet_gi', 
            text: 'sujet4_semestre_4',
            pdf: '{{ asset('archive/sujet_gi_semestre 4.pdf') }}'
        },
        { 
            title: 'sujets-examen-ou-exercices', 
            text: 'sujets-examen-ou-exercices',
            pdf: '{{ asset('archive/sujets-examen-ou-exercices.pdf') }}'
        },
        { 
            title: 'sujets', 
            text: 'sujets',
            pdf: '{{ asset('archive/sujets-examen-ou-exercices.pdf') }}'
        },
        { 
            title: 'TD-Algorithmique', 
            text: 'TD-Algorithmique',
            pdf: '{{ asset('archive/TD-Algorithmique_(Exercices corrigés).pdf') }}'
        },
    ],
    get filteredItems() {
        return this.items.filter(item => item.title.toLowerCase().includes(this.search.toLowerCase()));
    }
}" class="p-6">

    <div class="relative w-full max-w-xl mx-auto mb-8"  id="bloc">
        <input type="text" x-model="search" placeholder="Rechercher..." class="w-full p-3 pl-10 text-gray-900 bg-white border border-gray-300 rounded-full shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50"/>
        <svg class="absolute left-3 top-3 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0a7.5 7.5 0 1 0-1.06 1.06L21 21z"/>
        </svg>
    </div>

    <template x-for="item in items" :key="item.title" id="bloc">
        <div x-show="item.title.toLowerCase().includes(search.toLowerCase())" class="w-full sm:w-[82%] mx-auto h-auto bg-white shadow-xl mt-4 p-4 md:h-[140px]">
            <h1 x-text="item.title" class="text-black font-bold mb-2 text-[19px] sm:text-[22px]"></h1>
            <p x-text="item.text" class="text-black mb-5 text-sm sm:text-base"></p>
            <a :href="item.pdf" download class="w-full sm:w-auto h-10 sm:h-12 bg-blue-600 p-3 text-white rounded-md text-center">
                TELECHARGER
            </a>
        </div>
    </template>

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
<!-- Include Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>


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