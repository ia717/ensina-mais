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

    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
            <!-- Cronograma -->
            <div class="col-span-3">
                <div class="bg-white rounded-lg shadow p-6 mb-4 w-80 h-40">
                    <div class="flex justify-between items-center flex-col <div class="bg-gradient-to-r from-purple-500 to-white h-64 w-full"></div>">
                        <h2 class="text-lg font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 1</h2>
                        <span class="text-gray-500 text-sm">01/01/2024 - 02:41:15</span>
                        <button class="bg-sky-800 font-bold text-sm text-white rounded-xl w-auto h-10 hover:bg-sky-500 transition-all duration-100 px-2 hover:px-4 mt-5">Conteúdos da Semana</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-4 w-80 h-40">
                    <div class="flex justify-between items-center flex-col">
                        <h2 class="text-lg font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 2</h2>
                        <span class="text-gray-500 text-sm">08/01/2024 - 02:30:10</span>
                        <button class="bg-sky-800 font-bold text-sm text-white rounded-xl w-auto h-10 hover:bg-sky-500 transition-all duration-100 px-2 hover:px-4 mt-5">Conteúdos da Semana</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-4 w-80 h-40">
                    <div class="flex justify-between items-center flex-col">
                        <h2 class="text-lg font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 3</h2>
                        <span class="text-gray-500 text-sm">15/01/2024 - 03:20:30</span>
                        <button class="bg-sky-800 font-bold text-sm text-white rounded-xl w-auto h-10 hover:bg-sky-500 transition-all duration-100 px-2 hover:px-4 mt-5">Conteúdos da Semana</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-4 w-80 h-40">
                    <div class="flex justify-between items-center flex-col">
                        <h2 class="text-lg font-semibold flex items-center"><i class="fas fa-calendar-week mr-2"></i>Semana 4</h2>
                        <span class="text-gray-500 text-sm">22/01/2024 - 01:50:45</span>
                        <button class="bg-sky-800 font-bold text-sm text-white rounded-xl w-auto h-10 hover:bg-sky-500 transition-all duration-100 px-2 hover:px-4 mt-5">Conteúdos da Semana</button>
                    </div>
                </div>
            </div>
           
</body>
</html>