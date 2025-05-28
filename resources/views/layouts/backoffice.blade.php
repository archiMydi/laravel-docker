<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name.back', 'Portfolio') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-gray-800 overflow-hidden">
    {{-- Header fixe --}}
    <header class="fixed top-0 left-0 w-full bg-white shadow z-20 h-16">
        @include('partials.backoffice-header')
    </header>

    {{-- Contenu scrollable sous le header --}}
    <main class="pt-16 h-[calc(100vh-4rem)] overflow-y-auto scroll-smooth">
        <div class="w-screen">
            @yield('content')
        </div>
    </main>
</body>

</html>