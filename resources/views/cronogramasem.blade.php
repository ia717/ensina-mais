@include('menuteste')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cronograma</title>
</head>
<body>
    <div>
        @include('menuteste')
</div>

<main class="flex-1 flex justify-around items-center">
        <div class="text-center w-full p-8 md:p-0 md:w-auto">
            <div class="text-gray-500 text-lg mb-5">Utilize os filtros para buscar cronogramas</div>
            <span class="material-icons text-gray-400 text-5xl"></span>
        </div>
    </main>

            </div>
            <!-- Filtro de Matérias -->
             <aside class="left-3/4 ml-32 absolute w-full h-full md:w-64 bg-white shadow-lg p-6">
             <div class="col-span-1">
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
            </div>
        </div>
    </div>
             </aside>
           
</body>
</html>