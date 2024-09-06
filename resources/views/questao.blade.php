<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão e Filtro com Menu Lateral</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex h-screen overflow-hidden transition duration-300">
    <!-- Menu Hambúrguer -->
    <input type="checkbox" id="checkbox" class="hidden">
    <label for="checkbox" class="fixed top-4 left-4 z-20 cursor-pointer p-2 bg-green-400 rounded-md">
        <i class="fas fa-bars text-white"></i>
    </label>

    <!-- Menu Lateral -->
    <aside class="sidebar bg-white w-64 fixed top-0 left-0 h-full p-6 z-10 transform transition-transform duration-300 -translate-x-full lg:translate-x-0">
        <ul class="space-y-4">
            <li><a href="/paginainicial" class="text-gray-700 hover:text-green-400"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="/usuario" class="text-gray-700 hover:text-green-400"><i class="fas fa-user-graduate"></i> Área do Aluno</a></li>
            <li><a href="/calendario" class="text-gray-700 hover:text-green-400"><i class="fas fa-calendar-alt"></i> Calendário</a></li>
            <li><a href="/cronograma" class="text-gray-700 hover:text-green-400"><i class="fas fa-list"></i> Cronograma</a></li>
            <li><a href="/materias" class="text-gray-700 hover:text-green-400"><i class="fas fa-book"></i> Matérias</a></li>
            <li><a href="#"><i class="fas fa-pencil-ruler"></i> Simulados</a></li>
            <li><a href="#"><i class="fas fa-comments"></i> Fórum</a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i> Redação</a></li>
            <li><a href="questao"><i class="fas fa-question-circle"></i> Questões</a></li>
            <li><a href="#" class="text-green-400"><i class="fas fa-cog"></i> Configurações</a></li>
            <li><a href="#" class="text-red-500"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            <li class="theme-toggle cursor-pointer text-gray-700 hover:text-green-400"><i class="fas fa-moon"></i> Alternar Tema</li>
        </ul>
    </aside>

    <!-- Conteúdo Principal -->
    <div class="main-content flex-1 flex flex-col lg:flex-row bg-gray-200 p-6 space-x-6">
        <div class="question-container flex-2 bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-xl font-light mb-4">1- Em um projeto para a construção de um cinema, os arquitetos estão avaliando a relação entre a quantidade de fileiras e a quantidade de cadeiras em cada fileira.</h1>
            <p class="text-lg mb-6">O projeto inicial prevê uma sala para 304 pessoas. No caso de utilizarem 19 fileiras, o número de cadeiras por fileira será?</p>
            <ul class="space-y-2 mb-6">
                <li><input type="radio" id="option1" name="options1"><label for="option1" class="ml-2">14</label></li>
                <li><input type="radio" id="option2" name="options1"><label for="option2" class="ml-2">15</label></li>
                <li><input type="radio" id="option3" name="options1"><label for="option3" class="ml-2">16</label></li>
                <li><input type="radio" id="option4" name="options1"><label for="option4" class="ml-2">13</label></li>
                <li><input type="radio" id="option5" name="options1"><label for="option5" class="ml-2">12</label></li>
            </ul>
            <button class="btn-responder bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Responder</button>
        </div>

        <!-- Caixa de Filtros -->
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
