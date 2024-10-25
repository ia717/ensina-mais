<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ensina+') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body x-cloak x-data="{ darkMode: $persist(false) }" :class="{ 'dark': darkMode === true }"
    class="font-sans antialiased bg-gray-200 dark:bg-neutral-700 text-black dark:text-white">

    <div class="flex min-h-screen">
        
        @include('layouts.navigation')
        
        <div class="sm:ml-64 w-full">
            <!-- Page Content -->
            <main class="flex-1 bg-gray-200 dark:bg-neutral-700 px-4 lg:px-12 py-4 mt-20 sm:mt-0">
                <div>
                    {{ $slot }}
                </div>
            </main>
        </div>

    </div>

</body>

</html>
