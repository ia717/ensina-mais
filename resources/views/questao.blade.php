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
        </li>
        
        
    </ul>
    
    
    
</div>

        <!-- Caixa de Filtros -->
         <aside>
         <div class="filters-container bg-white p-6 rounded-lg shadow-md flex-1 h-fit">
            <h2 class="text-lg font-medium mb-6">Filtrar questões</h2>
            <div class="space-y-4">
                <div>
                    <label for="disciplina" class="block mb-2">Disciplina</label>
                    <select id="disciplina" class="w-full p-2 border rounded bg-gray-100">
                        <option>Matemática</option>
                        <option>Português</option>
                        <option>Ciências</option>
                    </select>
                </div>
                <div>
                    <label for="tipo" class="block mb-2">Tipo</label>
                    <select id="tipo" class="w-full p-2 border rounded bg-gray-100">
                        <option>Todas</option>
                    </select>
                </div>
                <div>
                    <label for="banca" class="block mb-2">Banca</label>
                    <select id="banca" class="w-full p-2 border rounded bg-gray-100">
                        <option>Todas</option>
                    </select>
                </div>
                <div>
                    <label for="assunto1" class="block mb-2">Assunto primário</label>
                    <select id="assunto1" class="w-full p-2 border rounded bg-gray-100">
                        <option>Todas</option>
                    </select>
                </div>
                <div>
                    <label for="assunto2" class="block mb-2">Assunto secundário</label>
                    <select id="assunto2" class="w-full p-2 border rounded bg-gray-100">
                        <option>Todas</option>
                    </select>
                </div>
                <div>
                    <label for="codigo" class="block mb-2">Código</label>
                    <input type="text" id="codigo" class="w-full p-2 border rounded bg-gray-100">
                </div>
                <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Filtrar</button>
                <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Baixar PDF</button>
            </div>
        </div>
    </div>

         </aside>
       

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('checkbox');
            const sidebar = document.querySelector('.sidebar');

            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    sidebar.classList.add('-translate-x-full');
                } else {
                    sidebar.classList.remove('-translate-x-full');
                }
            });
        });
    </script>
</body>

</html>
