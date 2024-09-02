<x-app-layout> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemática Básica</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-md shadow-md">
        <h1 class="text-xl font-bold mb-4">Matemática Básica</h1>
        <p class="text-gray-700 mb-4">Escolha uma aula</p>

        <div class="space-y-4">
            <!-- Aula 1 -->
            <div class="p-4 border rounded-md flex justify-between items-center">
                <div>
                    <p class="text-gray-700"><br><span class="font-bold">20:00</span> </br>Adição e Subtração</p>
                </div>
                <span class="text-red-600 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
            </div>

            <!-- Aula 2 -->
            <div class="p-4 border rounded-md flex justify-between items-center">
                <div>
                    <p class="text-gray-700"><br><span class="font-bold">18:00</span> </br>Multiplicação e Divisão</p>
                </div>
                <span class="text-red-600 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
            </div>

            <!-- Aula 3 -->
            <div class="p-4 border rounded-md flex justify-between items-center">
                <div>
                    <p class="text-gray-700"><br><span class="font-bold">21:00</span> </br> Expressões Numéricas</p>
                </div>
                <span class="text-red-600 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
            </div>

            <!-- Aula 4 -->
            <div class="p-4 border rounded-md flex justify-between items-center">
                <div>
                    <p class="text-gray-700"><br><span class="font-bold">25:00</span></br> Fração</p>
                    
                </div>
            </div>

            <!-- Questões -->
            <div class="p-4 border rounded-md flex items-center">
                <div class="flex items-center space-x-2">
                <p><label for="questoes" class="text-gray-700">Questões</p>
                 </br>Multiplicação e Divisão</p>
                    <input type="radio" id="questoes" name="aula" class="form-radio text-blue-600" checked>
                    
                   
                    
                </div>
                <p class="text-teal-500 text-lg font-semibold">45%</p>
            </div>
        </div>
    </div>

</body>
</html>
</x-app-layout> 