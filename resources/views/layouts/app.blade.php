<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ensina+') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body x-cloak x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }" class="font-poppins antialiased">

    @include('layouts.navigationmobile')
    <div class="flex min-h-screen bg-gray-200 dark:bg-neutral-700">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="flex-1 bg-gray-200 dark:bg-neutral-700 px-4 lg:px-12 py-4">
            <div>
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>