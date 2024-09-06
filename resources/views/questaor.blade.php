<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" h-screen">

   
    <div class="w-64 flex flex-col">
        @include('menuteste')
    </div>

    
    <main class="flex-1 flex flex-col">
      
        <nav class="bg-gray-200 p-4 flex justify-between items-center">
            <a href="#" class="text-blue-600">Anterior</a>
            <p class="text-gray-700">Questão 1/500</p>
            <a href="#" class="text-blue-600">Próxima</a>
        </nav>
       
        
<div class="w-200 h-1/2 bg-white p-8 rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Questão</h1>
    
    <p class="text-lg text-gray-600 mb-6">Seja X o subconjunto dos números inteiros dado por {0,1,2,3,4,5}. Quantos pares distintos (A,B) de subconjuntos A e B de X existem tais que AC – B = {0,1}, em que AC denota o complementar de A em X?</p>


    <ul class="space-y-3 mb-6">
        <li>
            <label class="flex items-center ">
                <input type="radio" name="options" class="mr-2">
                <span class="text-gray-700 ">(A) 16</span>
            </label>
        </li>
        <li>
            <label class="flex items-center">
                <input type="radio" name="options" class="mr-2">
                <span class="text-gray-700">(B) 14</span>
            </label>
        </li>
        <li>
            <label class="flex items-center">
                <input type="radio" name="options" class="mr-2">
                <span class="text-gray-700">(C) 10</span>
            </label>
        </li>
        <li>
            <label class="flex items-center bg-green-500">
                <input type="radio" name="options" class="mr-2">
                <span class="text-gray-700">(D) 12</span>
            </label>
        </li>
       
        <li>
            <label class="flex items-center">
                <input type="radio" name="options" class="mr-2">
                <span class="text-gray-700">(E) 18</span>
            </label>
        </li>
        
        
    </ul>
    
    
    
</div>
        <div class="w-full bg-[#04a5826d] border-2 border-[#04A582] p-8 rounded-lg space-y-6">

            <div class="flex justify-between items-center">
               
                <div class="flex flex-col items-center space-y-4">
                    <h1 class="text-bold font-semibold">Resolução</h1>
                    <button class="bg-[#04A582] text-white py-2 px-6 rounded-full hover:bg-green-600 flex items-center space-x-2">
                        <span>Ver Resolução</span>
                       
                    </button>
                    <button class="bg-[#04A582] text-white py-2 px-6 rounded-full hover:bg-green-600 flex items-center space-x-2">
                        <span>Ver Resolução</span>
                            
                    </button>

                    
                </div>

                <div class="text-center">
                            <p class="font-semibold">Percentual de Acertos</p>
                            <div class="relative pt-4">
                                <div class="w-full h-1 bg-gray-300 rounded">
                                    <div class="w-11/12 h-1 bg-green-500 rounded"></div>
                                </div>
                                <p class="mt-2 font-semibold text-green-600">95,7%</p>
                            </div>
                    </div>

                <div class=" items-center space-y-4 ">
                    <h1 class="text-bold items-center font-semibold">Resolução</h1>
                    <button class="bg-green-500 text-white py-1 px-4 rounded-full">Fácil</button>
                    <button class="bg-gray-300 text-gray-500 py-1 px-4 rounded-full">Médio</button>
                    <button class="bg-gray-300 text-gray-500 py-1 px-4 rounded-full">Difícil</button>
                </div>
    
       
                
            </div>
    
  
           

            <div class="text-center">
                <p class="font-semibold">Alternativas mais Marcadas</p>
                <div class="grid grid-cols-5 gap-4 mt-4 text-sm">
                    <div>
                        <p class="font-bold">A</p>
                        <p>0,6%</p>
                    </div>
                    <div>
                        <p class="font-bold">B</p>
                        <p>1,3%</p>
                    </div>
                    <div>
                        <p class="font-bold">C</p>
                        <p>0,7%</p>
                    </div>
                    <div>
                        <p class="font-bold">D</p>
                        <p>95,7%</p>
                    </div>
                    <div>
                        <p class="font-bold">E</p>
                        <p>1,7%</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

   
    <div class="w-64 bg-white shadow-lg p-6">
      @include('caixafiltros')
    </div>

</body>

</html>
