@props(['title' => 'Idea']) 

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Idea' }}</title>
    <meta name="description" content="A professional developer blog">
     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Code&display=swap" rel="stylesheet"> 

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles 
</head>

<body class="min-h-screen bg-base-200 antialiased capitalize" style="font-family: 'Google Sans Code', sans-serif;">
    <div class="relative min-h-screen">

        <x-navbar/>
            <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
                {{ $slot }}
            </main>
        <x-footer />
    </div>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            
    @livewireScripts
</body>
</html>
