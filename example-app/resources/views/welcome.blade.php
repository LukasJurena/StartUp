<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

        <!-- Styles -->
        @vite('resources/css/app.css') 
    </head>
    <body class="bg-gray-100 text-gray-800">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-2">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold">GrowPot</h1>
                <div class="obrazek">
                    <!--<img class="absolute left-0 top-0 h-10 w-10" src="/build/assets/images/grow_pot_zeleny.svg" alt="Laravel background" /> -->
                </div>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-600 hover:text-green-500  space-x-4">Domů</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-900  space-x-4">O nás</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600  space-x-4">Služby</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600  space-x-4">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-500 text-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold">Vítejte na naší stránce!</h2>
            <p class="mt-4">Prozkoumejte naše služby a nabídku.</p>
            <a href="#" class="mt-6 inline-block bg-white text-blue-500 font-semibold py-2 px-4 rounded">Zjistit víc</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto py-10">
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold">Služba 1</h3>
                <p class="mt-2">Popis služby 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold">Služba 2</h3>
                <p class="mt-2">Popis služby 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold">Služba 3</h3>
                <p class="mt-2">Popis služby 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Tvoje Webová Stránka. Všechna práva vyhrazena.</p>
        </div>
    </footer>
</body>
</html>
