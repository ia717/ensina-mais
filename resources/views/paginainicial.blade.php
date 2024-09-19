<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Incial</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="justify-end items-end flex">
    
    <main class="w-1/2">
  
        <div class="p-6   ">
                <img src="{{asset('imagens/banner home.png')}}" alt="">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso diário</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 10%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">10%</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso mensal</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 25%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">25%</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso anual</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 45%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">45%</p>
            </div>
        </div>
    
    </main>
</body>
</html>
    
