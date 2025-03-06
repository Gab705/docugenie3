<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/archiver (1).png">
    <title>Docugénie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <form action="{{ route('poster') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md w-96">
        @csrf
        <h2 class="text-lg font-semibold mb-4">Ajouter Une Correction</h2>

        <div class="mb-4">
            <label for="libelle" class="block text-sm font-medium text-gray-700">Libellé</label>
            <input type="text" id="libelle" name="libelle" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Entrez un libellé">
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" id="image" name="image" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Envoyer</button>
    </form>

</body>
</html>
