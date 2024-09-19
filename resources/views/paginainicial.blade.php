<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    <main class="flex">
    
        <aside class="w-1/5 p-3">
            @include('menuteste')
        </aside>
       
        <div class="w-4/5 p-3">
          
       
            <div>
                <div class="flex w-full">
                         
                    <img src="{{asset('imagens/banner home.png')}}" alt="">
                    <div class="flex-col justify-end mb-4">
                        <div class="mr-4 justify-end">
                           <button> <i  class="fas fa-clock fa-2x text-sky-800"></i> </button>
                        </div>
    
                        <div>
                         <button  onclick="window.location.href='cronograma.blade.php'">   <i class="fas fas fa-calendar-alt fa-2x text-xl text-sky-800"></i> </button>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso diário</h2>
                        <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                            <div class="bg-sky-800 h-4 rounded-full" style="width: 10%;"></div>
                        </div>
                        <p class="text-sky-800 text-lg font-semibold">10%</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso mensal</h2>
                        <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                            <div class="bg-sky-800 h-4 rounded-full" style="width: 25%;"></div>
                        </div>
                        <p class="text-sky-800 text-lg font-semibold">25%</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso anual</h2>
                        <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                            <div class="bg-sky-800 h-4 rounded-full" style="width: 45%;"></div>
                        </div>
                        <p class="text-sky-800 text-lg font-semibold">45%</p>
                    </div>
                </div>

               <button class="w-full justify-center"> <div class="bg-white shadow-md rounded-md p-4 flex">
                    <div class="flex-none">
                        <h1 class="text-lg font-semibold">Continuar Assistindo</h1>
                        <div class="rounded-md flex items-center justify-center">
                            <img src="{{asset('imagens/matematica.png')}}" alt="">
                        </div>
                    </div>
                    <div class="p-10 ">
                        <h2 class="text-lg font-semibold">Expressões numéricas</h2>
                        <p class="text-gray-500">Matemática Básica</p>
                  <div class="">
                  <p class="text-sm text-start text-gray-500 ">10:20 de 20:46</p>
                        <div class="w-full bg-gray-300 rounded-full h-4">
                                <div class="bg-sky-800 h-4 rounded-full" style="width: 50%;"></div>
                            </div>
                            
                        
                    </div>
                </div></button>
            </div>
            
</div>
</main>
</body>
</html>
