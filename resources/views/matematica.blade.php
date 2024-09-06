@include('menuteste')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Matemática</title>
    <!-- Importando Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Importando Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Conteúdo Principal */
        .main-content {
            margin-left: 245px;
            flex: 1;
            padding: 2rem;
            overflow-y: auto;
            transition: margin-left 0.3s ease;
        }

        .main-content.hamburger-active {
            margin-left: 0;
            /* Move o conteúdo para a esquerda quando o menu é escondido */
        }

        .main-content h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .category {
            margin-bottom: 40px;
        }

        .category h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .subject-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .subject {
            width: 150px;
            height: 120px;
            background-color: #f5f5f5;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .subject i {
            font-size: 30px;
            margin-bottom: 10px;
            color: #333;
        }

        .subject span {
            font-size: 16px;
            color: #333;
        }

        .subject:hover {
            background-color: #e0e0e0;
            transform: translateY(-5px);
        }

        /* Cores específicas para as categorias */
        .math {
            background-color: orange;
        }

        .science {
            background-color: #d4edda;
        }

        .humanities {
            background-color: #fff3cd;
        }

        .languages {
            background-color: #f8d7da;
        }

        .preparation {
            background-color: #d6d8d9;
        }

        /* Ícones específicos para as matérias */
        .subject.math i {
            color: #007bff;
        }

        .subject.science i {
            color: #28a745;
        }

        .subject.humanities i {
            color: #ffc107;
        }

        .subject.languages i {
            color: #dc3545;
        }

        .subject.preparation i {
            color: purple;
        }

        /* Estilo padrão do tema claro */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
            background-color: #f5f5f5;
            color: #000;
            transition: background-color 0.3s, color 0.3s;
        }


        /* Estilo para o tema escuro */
        body.dark-mode {
            background-color: #333;
            color: #444;
        }

        body.dark-mode .main-content h1 {
            color: white;
            /* Cor do texto do conteúdo principal no tema escuro */
        }


        body.dark-mode .subject span,
        body.dark-mode .subject i {
            color: #444;
            /* Cor do texto e dos ícones ajustada para modo escuro */
        }

        /* Estilo para o tema escuro */
        body.dark-mode .main-content h2 {
            color: #fff;
            /* Cor do texto do conteúdo principal no tema escuro */
        }

        /* Menu Lateral */
        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #fff;
            padding-top: 60px;
            position: fixed;
            top: 0;
            left: 0;
            transition: transform 0.3s ease;
            transform: translateX(0);
            /* Mostra o menu por padrão */
            z-index: 1000;
            overflow-y: auto;
            /* Permite rolar o menu se necessário */
        }

        .sidebar.dark-mode {
            background-color: #444;
        }

        .sidebar.hidden {
            transform: translateX(-250px);
            /* Esconde o menu */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 10px;
            text-align: left;
            display: flex;
            align-items: center;
            padding-left: 20px;
        }

        .sidebar ul li a {
            color: #000;
            text-decoration: none;
            font-size: 16px;
            display: block;
            flex: 1;
        }

        .sidebar ul li a:hover {
            background-color: #f0f0f0;
            padding-left: 10px;
            transition: padding-left 0.3s;
        }

        .sidebar ul li a.logout {
            color: red;
        }

        .sidebar.dark-mode ul li a {
            color: #fff;
        }

        .sidebar.dark-mode ul li a:hover {
            background-color: #555;
        }

        /* Menu Hambúrguer */
        #checkbox {
            display: none;
        }

        .toggle {
            position: fixed;
            top: 1px;
            width: 50px;
            height: 35px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition-duration: .3s;
            z-index: 1100;
        }

        /* Estilo para os ícones */
        .toggle i {
            font-size: 24px;
            color: rgb(76, 189, 151);
            transition: transform 0.3s, opacity 0.3s;
        }

        /* Inicialmente mostrar o ícone de barras */
        #checkbox:not(:checked)~.toggle i.fa-times {
            display: block;
        }

        #checkbox:not(:checked)~.toggle i.fa-bars {
            display: none;
        }

        /* Quando o menu está aberto */
        #checkbox:checked~.toggle i.fa-times {
            display: none;
        }

        #checkbox:checked~.toggle i.fa-bars {
            display: block;
        }

        @media (max-width: 1000px) {

            .main-content {
                margin-left: 1.5rem;

            }

            .sidebar {
                display: flex;

                width: 100%;
                /* Largura total da tela */
                height: 100%;
                position: fixed;
                top: 0;
                right: 0;
                /* Menu alinhado à direita */
                left: auto;
                /* Remove alinhamento à esquerda */
                transform: translateX(100%);
                /* Esconde o menu fora da tela à direita */
                z-index: 1000;
                transition: transform 0.3s ease;
            }

            .toggle {

                top: 15px;
                /* Mantém a distância do topo */
                right: 15px;
                /* Move o ícone para o lado direito */
                left: auto;
                /* Remove o alinhamento à esquerda */

            }

            #checkbox:checked~.sidebar {
                transform: translateX(0);
                /* Mostra o menu quando o checkbox está marcado */
            }

            #checkbox:not(:checked)~.toggle i.fa-bars {
                display: block;
            }

            #checkbox:not(:checked)~.toggle i.fa-times {
                display: none;
            }

            /* Quando o menu está aberto */
            #checkbox:checked~.toggle i.fa-bars {
                display: none;
            }

            #checkbox:checked~.toggle i.fa-times {
                display: block;
            }
        }

        /* Botão de alternância de tema */
        .theme-toggle {
            display: flex;
            align-items: center;
            padding: 10px;
            cursor: pointer;
            margin: 20px;
            color: #000;
            transition: color 0.3s;
        }

        .theme-toggle i {
            margin-right: 10px;
        }

        .theme-toggle:hover {
            background-color: #f0f0f0;
        }

        .sidebar.dark-mode .theme-toggle {
            color: #fff;
        }

        .sidebar.dark-mode .theme-toggle:hover {
            background-color: #555;
        }
    </style>
</head>

<body>


    <!-- Conteúdo Principal -->

    <div class="main-content">
        <h1>Página de Matemática</h1>

        <!-- Categoria: Matemática -->
        <div class="category">
            <h2>Escolha um assunto</h2>
            <!-- Grid de Assuntos -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Matemática básica</h3>
                    <p class="text-sm text-gray-600 mt-2">35 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">10 de 35 aulas</div>
                    <div class="bg-blue-400 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Matemática básica</h3>
                    <p class="text-sm text-gray-600 mt-2">35 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">10 de 35 aulas</div>
                    <div class="bg-blue-400 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Exponencial</h3>
                    <p class="text-sm text-gray-600 mt-2">15 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">0 de 15 aulas</div>
                    <div class="bg-gray-300 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Probabilidade</h3>
                    <p class="text-sm text-gray-600 mt-2">10 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">0 de 10 aulas</div>
                    <div class="bg-gray-300 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Matriz</h3>
                    <p class="text-sm text-gray-600 mt-2">5 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">0 de 5 aulas</div>
                    <div class="bg-gray-300 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Matriz</h3>
                    <p class="text-sm text-gray-600 mt-2">5 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">0 de 5 aulas</div>
                    <div class="bg-gray-300 h-1 mt-2 rounded"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>