/@include ('menuteste')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TOPICOS DA MATERIA</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="ml-[250px] bg-white p-6 rounded-md shadow-md">
        <h1 class="text-xl font-bold mb-4">{{ $topico->name }}</h1>
    <!-- Aulas -->

       <div class="space-y-4">
            <!-- Aula 1 -->
            <div class="p-4 border rounded-md flex justify-between items-center">
                <div>
                    <p class="text-gray-700"><br><span class="font-bold">20:00</span> </br>Adição e Subtração</p>
>>>>>>> 76299679aa2cc658180f3082ffb49bf24069453b
                </div>
                <span class="text-red-600 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
            </div> 

            <!-- Aula 2 -->
             <!-- <div class="p-4 border rounded-md flex justify-between items-center">
                <div>
                    <p class="text-gray-700"><br><span class="font-bold">18:00</span> </br>Multiplicação e Divisão</p>
                </div>
                <span class="text-red-600 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
            </div> -->

            <!-- Aula 3 -->
             <!-- <div class="p-4 border rounded-md flex justify-between items-center">
                <div>
                    <p class="text-gray-700"><br><span class="font-bold">21:00</span> </br> Expressões Numéricas</p>
                </div>
                <span class="text-red-600 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
            </div> -->

            <!-- Aula 4 -->
             <!-- <div class="p-4 border rounded-md flex justify-between items-center">
                <div>
                    <p class="text-gray-700"><br><span class="font-bold">25:00</span></br> Fração</p>
                    
                </div>
            </div> -->

        </div>
    </div>

</body>
</html>