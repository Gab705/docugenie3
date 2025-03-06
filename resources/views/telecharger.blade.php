<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/archiver (1).png">
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" href="/images/archiver (1).png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/archiver (1).png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Nom de ton PWA">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Docugénie</title>
</head>
<body>
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <svg class="mx-auto w-14 h-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
            </svg>
            <h2 class="mt-10 text-3xl font-bold leading-tight text-blue-600 sm:text-4xl lg:text-5xl">Telecharger Docugénie</h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Installer Docugénie pour ne pas toujours chercher le lien du Site</p>
        </div>

        <div class="flex flex-col items-center justify-center mt-8 space-y-4 md:space-y-0 md:space-x-4 md:flex-row lg:mt-12">
            <a href="#" id="openModal" title="" class="inline-flex items-center justify-center px-4 py-4 text-black transition-all duration-200 border-2 border-black rounded-md hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white" role="button">
                <svg class="w-6 h-6 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M19.665 16.811a10.316 10.316 0 0 1-1.021 1.837c-.537.767-.978 1.297-1.316 1.592-.525.482-1.089.73-1.692.744-.432 0-.954-.123-1.562-.373-.61-.249-1.17-.371-1.683-.371-.537 0-1.113.122-1.73.371-.616.25-1.114.381-1.495.393-.577.025-1.154-.229-1.729-.764-.367-.32-.826-.87-1.377-1.648-.59-.829-1.075-1.794-1.455-2.891-.407-1.187-.611-2.335-.611-3.447 0-1.273.275-2.372.826-3.292a4.857 4.857 0 0 1 1.73-1.751 4.65 4.65 0 0 1 2.34-.662c.46 0 1.063.142 1.81.422s1.227.422 1.436.422c.158 0 .689-.167 1.593-.498.853-.307 1.573-.434 2.163-.384 1.6.129 2.801.759 3.6 1.895-1.43.867-2.137 2.08-2.123 3.637.012 1.213.453 2.222 1.317 3.023a4.33 4.33 0 0 0 1.315.863c-.106.307-.218.6-.336.882zM15.998 2.38c0 .95-.348 1.838-1.039 2.659-.836.976-1.846 1.541-2.941 1.452a2.955 2.955 0 0 1-.021-.36c0-.913.396-1.889 1.103-2.688.352-.404.8-.741 1.343-1.009.542-.264 1.054-.41 1.536-.435.013.128.019.255.019.381z"
                    ></path>
                </svg>
                IOS
            </a>

            <a href="#" id="install-button" title="" class="inline-flex items-center justify-center px-4 py-4 text-black transition-all duration-200 border-2 border-black rounded-md hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white" role="button">
                <svg class="w-6 h-6 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="m3 5.557 7.357-1.002.004 7.097-7.354.042L3 5.557zm7.354 6.913.006 7.103-7.354-1.011v-6.14l7.348.048zm.892-8.046L21.001 3v8.562l-9.755.077V4.424zm9.758 8.113-.003 8.523-9.755-1.378-.014-7.161 9.772.016z"></path>
                </svg>
                Windows
            </a>

            <a href="#" title="" id="install-button" class="inline-flex items-center justify-center px-4 py-4 text-black transition-all duration-200 border-2 border-black rounded-md hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white" role="button">
            <svg class="w-6 h-6 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.25 9.5h1.75a.75.75 0 0 1 .75.75v7a.75.75 0 0 1-.75.75H17.25a.75.75 0 0 1-.75-.75v-7a.75.75 0 0 1 .75-.75zm-12 0h1.75a.75.75 0 0 1 .75.75v7a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75v-7a.75.75 0 0 1 .75-.75zM8.75 13h6.5a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-.75.75h-6.5a.75.75 0 0 1-.75-.75v-3a.75.75 0 0 1 .75-.75zm5.25-4.5a.75.75 0 0 1 .75.75v.75H9.25V9.25a.75.75 0 0 1 1.5 0v.75h2.5v-.75a.75.75 0 0 1 .75-.75zM7 3.75a.75.75 0 1 1 1.06-1.06l1.5 1.5a.75.75 0 0 1-1.06 1.06l-1.5-1.5zM15.94 2.69a.75.75 0 1 1 1.06 1.06l-1.5 1.5a.75.75 0 1 1-1.06-1.06l1.5-1.5z"/>
            </svg>
                Androide
            </a>

            <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                    <h2 class="text-xl font-bold">Installer sur IOS</h2>
                    <p class="mt-2 text-gray-600">1️⃣ Ouvrir le site dans Safari <br>
                    2️⃣ Appuyer sur le bouton "Partager" (en bas de l'écran, icône carré avec flèche) <br>
                    3️⃣ Sélectionner "Ajouter à l’écran d’accueil"</p>
                    <button id="closeModalBtn" class="mt-4 px-4 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700">
                    Fermer
                    </button>
                </div>
            </div>
        </div>

        <p class="mt-6 text-base text-center text-gray-600">ça prend juste 1mn mon/ma Goat 🐐</p>
        <script>
            let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
    const installButton = document.getElementById('install-button');
    if (installButton) installButton.style.display = 'block';

    installButton?.addEventListener('click', () => {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choiceResult) => {
            console.log(choiceResult.outcome === 'accepted' ? 'L\'utilisateur a accepté l\'installation' : 'L\'utilisateur a refusé l\'installation');
            deferredPrompt = null;
        });
    });
});

if (window.matchMedia('(display-mode: standalone)').matches) {
    const installButton = document.getElementById('install-button');
    if (installButton) installButton.style.display = 'none';
}

const modal = document.getElementById("modal");
const openModal = document.getElementById("openModal");
const closeModalBtn = document.getElementById("closeModalBtn");

    openModal.addEventListener("click", () => {
    modal.classList.remove("hidden");
    });

    closeModalBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
    });

    modal.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.classList.add("hidden");
    }
    });
        </script>
    </div>
</section>

</body>
</html>