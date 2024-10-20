<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="build/assets/css/app.css" rel="stylesheet">
        <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

        <!-- Styles -->
        @vite('resources/css/app.css') 
    </head>
    <body class=" text-gray-800">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-2">
            <div class="flex justify-between items-center">
                <!--<h1 class="text-xl font-bold">GrowPot</h1>-->
                <div class="obrazek">
                <a href="/"> <img class=" left-24 top-0 w-20 " src="build/assets/images/grow_pot_zeleny.png" href="/"/></a>
                </div>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-600 hover:text-green-500  space-x-4 duration-300">Domů</a></li>
                    <li><a href="#produkt" class="text-gray-600 hover:text-green-500  space-x-4 duration-300">Produkt</a></li>
                    <li><a href="#kontakt" class="text-gray-600 hover:text-green-500  space-x-4 duration-300">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <!--<header class="bg-blue-500 text-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold">Vítejte na naší stránce!</h2>
            <p class="mt-4">Prozkoumejte naše služby a nabídku.</p>
            <a href="#" class="mt-6 inline-block bg-white text-blue-500 font-semibold py-2 px-4 rounded">Zjistit víc</a>
        </div>
    </header>-->

    <!-- Main Content -->
    <main class="container mx-auto py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center p-6">
        <!-- Image on the left -->
        <img class="w-full h-auto" src="build/assets/images/GrowBot_hlavni_obrazek_png.png" alt="description">

        <!-- Content on the right -->
        <div class="flex flex-col">
            <p class="text-[120px] font-bold mb-2 text-black">GrowPot.</p>
            <p class="mb-4 text-whitre">Automatický květináč, který zvlhčuje, měří teplotu, vlhkost, přizpůsobuje se květině, poháněný solárnímy panely.</p>
            <a href="#produkt"><button class="w-1/2 scroll-smooth bg-black text-white px-4 py-2 rounded hover:bg-green-500 hover:text-black duration-300 hover:border-2 hover:border-black">Zjistit více</button></a>
        </div>
    </div>


    <!-- 2 -->

    <div id="produkt" class="scroll-smooth">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center p-6">
            <!-- Image on the left -->
            <img class=" pl-6 w-full h-auto" src="build/assets/images/Kvetinac_1.png" alt="description">

            <div class="flex flex-col w-full md:w-1/2">
                    <div class="flex items-center bg-white rounded-lg mb-4 p-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 object-contain rounded" src="build/assets/images/watering-can.png" alt="Popis obrázku 1">
                        </div>
                        <div class="flex flex-col pl-4">
                            <h2 class="text-2xl font-bold mb-2">Automatizované zavlažování</h2>
                            <p>Zalévání Integrovaným zavlažovacím systémem.</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg mb-4 p-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 object-contain rounded" src="build/assets/images/solar-panel.png" alt="Popis obrázku 2">
                        </div>
                        <div class="flex flex-col pl-4">
                            <h2 class="text-2xl font-bold mb-2">Ekologické napájení</h2>
                            <p>Zalévání Integrovaným zavlažovacím systémem.</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white rounded-lg mb-4 p-4">
                        <div class="flex-shrink-0">
                            <img class="w-12 h-12 object-contain rounded" src="build/assets/images/test.png" alt="Popis obrázku 3">
                        </div>
                        <div class="flex flex-col pl-4">
                            <h2 class="text-2xl font-bold mb-2">Automatické hnojení</h2>
                            <p>Napájen solárními panely, které dokáží efektivně využít sluneční energii.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <!--3 -->


    <img class="w-auto h-auto mx-auto mb-4 mt-28" src="build/assets/images/Logo_Pot.png" alt="Popis obrázku">
        <!-- Slova oddělená borderem -->
        <div class="flex justify-center items-center">
            <div class="flex items-center">
                <a class="text-3xl font-bold px-4">Efektivní</a>
                <div class="border-l border-black h-8 mx-4"></div> <!-- Čárková čára -->
                <a class="text-3xl font-bold px-4">Úsporný</a>
                <div class="border-l border-black h-8 mx-4"></div> <!-- Čárková čára -->
                <a class="text-3xl font-bold px-4">Stylový</a>
                <div class="border-l border-black h-8 mx-4"></div> <!-- Čárková čára -->
                <a class="text-3xl font-bold px-4">Praktický</a>
            </div>
        </div>
    </main>

    <div id="kontakt">
    <div class="flex justify-center items-center my-7">
    <a class="text-3xl font-bold py-8">Email: sigma@skibidi.com</a>
    </div>
    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Lubor Kaluža, Lukáš Juřena, Václav Frýbort</p>
        </div>
    </footer>
</body>
</html>
