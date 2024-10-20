<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('navbar')

    <main>
        @yield('content')
    </main>

    <script>
        // JavaScript to handle mobile menu toggle
        const button = document.querySelector('button[aria-controls="mobile-menu"]');
        const menu = document.getElementById('mobile-menu');
        
        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>