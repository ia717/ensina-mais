<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex justify-end h-screen bg-gray-100">
    <!-- Caixa de Filtros -->
    <div class="filters-container w-full h-full bg-white p-4 rounded-lg shadow-lg transition duration-300 hover:shadow-xl overflow-y-auto">
        <h2 class="text-xl font-medium text-gray-800 mb-4">Filtrar questões</h2>
        <div class="space-y-4">
            <div>
                <label for="disciplina" class="block text-gray-700 mb-1">Disciplina</label>
                <select id="disciplina" class="w-full p-2 border rounded bg-gray-100">
                    <option>Matemática</option>
                    <option>Português</option>
                    <option>Ciências</option>
                </select>
            </div>
            <div>
                <label for="tipo" class="block text-gray-700 mb-1">Tipo</label>
                <select id="tipo" class="w-full p-2 border rounded bg-gray-100">
                    <option>Todas</option>
                </select>
            </div>
            <div>
                <label for="banca" class="block text-gray-700 mb-1">Banca</label>
                <select id="banca" class="w-full p-2 border rounded bg-gray-100">
                    <option>Todas</option>
                </select>
            </div>
            <div>
                <label for="assunto1" class="block text-gray-700 mb-1">Assunto primário</label>
                <select id="assunto1" class="w-full p-2 border rounded bg-gray-100">
                    <option>Todas</option>
                </select>
            </div>
            <div>
                <label for="assunto2" class="block text-gray-700 mb-1">Assunto secundário</label>
                <select id="assunto2" class="w-full p-2 border rounded bg-gray-100">
                    <option>Todas</option>
                </select>
            </div>
            <div>
                <label for="codigo" class="block text-gray-700 mb-1">Código</label>
                <input type="text" id="codigo" class="w-full p-2 border rounded bg-gray-100">
            </div>
            <button class="w-full bg-sky-800 text-white py-2 rounded-lg transition duration-300 hover:bg-blue-600">Filtrar</button>
            <button class="w-full bg-sky-800 text-white py-2 rounded-lg transition duration-300 hover:bg-blue-600 mt-2">Baixar PDF</button>
        </div>
    </div>
</body>
</html>
