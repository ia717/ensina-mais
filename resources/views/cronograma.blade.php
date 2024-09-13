<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cronograma</title>
</head>
<body class="bg-gray-100">
    
   
        <aside class="">
            @include('menuteste')
        </aside>

        <main class="mx-auto w-6/6  p-24 flex flex-col items-center space-y-16 ">
            <div class="w-screen h-screen max-w-4xl">
                
                <div class="bg-white rounded-lg w-full shadow-md mb-4 p-6 flex items-center">
                    <div class="mr-4">
                        <i class="fas fa-chevron-right text-xl"></i>
                    </div>
                    <div>
                        <div class="text-xl font-semibold">Semana 1</div>
                        <div class="text-gray-500 text-sm">01/01/2024 - 02:41:15</div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md mb-4 p-6 flex items-center">
                    <div class="mr-4">
                        <i class="fas fa-chevron-right text-xl"></i>
                    </div>
                    <div>
                        <div class="text-xl font-semibold">Semana 2</div>
                        <div class="text-gray-500 text-sm">08/01/2024 - 02:30:10</div>
                    </div>
                </div>

              
                <div class="bg-white rounded-lg shadow-md mb-4 p-6 flex items-center">
                    <div class="mr-4">
                        <i class="fas fa-chevron-right text-xl"></i>
                    </div>
                    <div>
                        <div class="text-xl font-semibold">Semana 3</div>
                        <div class="text-gray-500 text-sm">15/01/2024 - 03:20:30</div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md mb-4 p-6 flex items-center">
                    <div class="mr-4">
                        <i class="fas fa-chevron-right text-xl"></i>
                    </div>
                    <div>
                        <div class="text-xl font-semibold">Semana 4</div>
                        <div class="text-gray-500 text-sm">22/01/2024 - 01:50:45</div>
                    </div>
                </div>

            </div>
        </main>
        <aside class="fixed right-0 top-0 w-1/6 h-full bg-white shadow-lg p-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Filtrar matérias</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-blue-600 flex items-center hover:text-blue-800"><i class="fas fa-calculator mr-2"></i>MATEMÁTICA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-dna mr-2"></i>BIOLOGIA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-flask mr-2"></i>QUÍMICA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-atom mr-2"></i>FÍSICA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-landmark mr-2"></i>HISTÓRIA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-globe mr-2"></i>GEOGRAFIA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-users mr-2"></i>SOCIOLOGIA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-book mr-2"></i>FILOSOFIA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-pencil-alt mr-2"></i>GRAMÁTICA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-book-open mr-2"></i>LITERATURA</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-pen mr-2"></i>REDAÇÃO</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-language mr-2"></i>INGLÊS</a></li>
                    <li><a href="#" class="text-gray-600 flex items-center hover:text-gray-800"><i class="fas fa-paint-brush mr-2"></i>ARTE</a></li>
                </ul>
            </div>
        </aside>
  
</body>
</html>
