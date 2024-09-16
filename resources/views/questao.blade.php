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


    <main class="flex-1 flex flex-col w-96">

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
                    <label class="flex items-center">
                        <input type="radio" name="options" class="mr-2">
                        <span class="text-gray-700">(D) 12</span>
                    </label>
                </li>

                <li>
                    <label class="flex items-center">
                        <input type="radio" name="options" class="mr-2">
                        <span class="text-gray-700">(E) 18</span>
                    </label>
                    <div class="flex justify-center">
                        <button class="w-28 bg-sky-800 text-white py-2 font-bold rounded-lg transition duration-300 hover:bg-blue-600">Responder</button>
                    </div>
                </li>



            </ul>





        </div>



    </main>


    <!-- Right Sidebar (Desktop) -->
    <div class="hidden lg:flex justify-end ml-auto">
        @include('caixafiltros')
    </div>
    </div>
    </main>
    </d