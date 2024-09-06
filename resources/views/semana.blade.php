
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <!-- Incluindo Font Awesome para os ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="max-w-5xl mx-auto p-4 md:p-6 lg:p-8 bg-gray-50 rounded-xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Cronograma -->
            <div class="md:col-span-2">
                <!-- Semana 1 -->
                <div class="bg-white rounded-lg shadow p-4 md:p-6 mb-4">
                    <div class="flex justify-between items-center border-b pb-2 mb-4">
                        <h2 class="text-xl font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 1</h2>
                        <span class="text-gray-500 text-sm">01/01/2024 - 02:41:15</span>
                    </div>
                    <!-- Tarefas da Semana -->
                    <div class="space-y-4">
                        <div class="bg-gray-50 rounded-lg p-4 shadow-inner flex items-center">
                            <i class="far fa-clock text-lg text-gray-500 mr-4"></i>
                            <div>
                                <span class="block text-lg font-semibold">20:00</span>
                                <span class="block text-gray-700">Adição e Subtração</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4 shadow-inner flex items-center">
                            <i class="far fa-clock text-lg text-gray-500 mr-4"></i>
                            <div>
                                <span class="block text-lg font-semibold">18:00</span>
                                <span class="block text-gray-700">Multiplicação e Divisão</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4 shadow-inner flex items-center">
                            <i class="far fa-clock text-lg text-gray-500 mr-4"></i>
                            <div>
                                <span class="block text-lg font-semibold">21:00</span>
                                <span class="block text-gray-700">Expressões Numéricas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filtro de Matérias -->
            <div class="bg-white rounded-lg shadow p-6 md:sticky md:top-0">
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
</body>

</html>
