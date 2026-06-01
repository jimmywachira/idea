@props(['title' => 'Idea']) 

<!doctype html>
<html lang="en" data-theme="sunset">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Idea' }}</title>
    <meta name="description" content="A professional developer blog">
     
    {{--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Code&display=swap" rel="stylesheet"> 

    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" /> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased font-semibold capitalize text-2xl" style="font-family: 'Google Sans Code', sans-serif;">
    {{-- <div class="absolute inset-0 -z-10 h-full w-full bg-slate-950 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem]"> --}}

    <div class="relative h-full w-full bg-white">
    <div class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:24px_24px]"></div></div>

    <x-navbar />
    <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">{{ $slot }}</main> 
    <x-footer />

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    @livewireScripts
    </div>
    </div>

</body>
</html>
