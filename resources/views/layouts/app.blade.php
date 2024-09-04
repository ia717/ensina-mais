<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
    <script>
        const checkbox = document.getElementById('checkbox');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content'); // Seleciona o conteúdo principal
        const bars = document.querySelectorAll('.bars');

        checkbox.addEventListener('change', function() {
            sidebar.classList.toggle('-translate-x-64'); // Mostra ou esconde o menu lateral
            mainContent.classList.toggle('ml-64'); // Ajusta a margem do conteúdo principal
            bars.forEach(bar => bar.classList.toggle('open')); // Animação do ícone de hambúrguer
        });

        function handleResize() {
            const isSmallScreen = window.innerWidth < 640; // Verifica se a tela é menor que 640px
            if (isSmallScreen) {
                sidebar.classList.add('-translate-x-64'); // Esconde a barra lateral
                mainContent.classList.remove('ml-64'); // Remove a margem do conteúdo principal
            } else {
                if (checkbox.checked) {
                    mainContent.classList.add('ml-64'); // Se o checkbox estiver marcado, adiciona margem
                }
                sidebar.classList.remove('-translate-x-64'); // Garante que o menu esteja visível em telas maiores
            }
        }

        // Chama a função na inicialização da página e no redimensionamento da janela
        window.addEventListener('load', handleResize);
        window.addEventListener('resize', handleResize);
    </script>
</html>
