<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemática Básica</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    /* Estilo para o tema escuro */
    body.dark-mode {
            background-color: #333;
            color: red;
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
            transform: translateX(0); /* Mostra o menu por padrão */
            z-index: 1000;
            overflow-y: auto; /* Permite rolar o menu se necessário */
        }

        .sidebar.dark-mode {
            background-color: #444;
        }

        .sidebar.hidden {
            transform: translateX(-250px); /* Esconde o menu */
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
            top: 15px;
            width: 40px;
            height: 30px;
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
      /* Inicialmente mostrar o ícone de fechar (X) */
#checkbox:not(:checked) ~ .toggle i.fa-times {
    display: block;
}

#checkbox:not(:checked) ~ .toggle i.fa-bars {
    display: none;
}

/* Quando o menu está fechado */
#checkbox:checked ~ .toggle i.fa-times {
    display: none;
}

#checkbox:checked ~ .toggle i.fa-bars {
    display: block;
}

@media (max-width: 768px) {
    .sidebar {
        width: 100%; /* Largura total da tela */
        height: 100%;
        position: fixed;
        top: 0;
        right: 0; /* Menu alinhado à direita */
        left: auto; /* Remove alinhamento à esquerda */
        transform: translateX(100%); /* Esconde o menu fora da tela à direita */
        z-index: 1000;
        transition: transform 0.3s ease;
    }

    .toggle {
        top: 15px; /* Mantém a distância do topo */
        right: 15px; /* Move o ícone para o lado direito */
        left: auto; /* Remove o alinhamento à esquerda */
    }

    #checkbox:not(:checked) ~ .sidebar {
        transform: translateX(0); /* Mostra o menu quando o checkbox está marcado */
    }

    #checkbox:checked ~ .sidebar {
        transform: translateX(100%); /* Esconde o menu quando o checkbox está desmarcado */
    }
}
            #checkbox:not(:checked) ~ .toggle i.fa-times {
            display: block;
        }

        #checkbox:not(:checked) ~ .toggle i.fa-bars {
            display: none;
        }

        /* Quando o menu está aberto */
        #checkbox:checked ~ .toggle i.fa-times {
            display: none;
        }

        #checkbox:checked ~ .toggle i.fa-bars {
            display: block;
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

<body class="bg-gray-100 font-sans">
      <!-- Menu Hambúrguer -->
      <input type="checkbox" id="checkbox">
    <label for="checkbox" class="toggle">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </label>

    <!-- Menu Lateral -->
    <div class="sidebar">
        <ul>
        <li><a href="/paginainicial"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="/usuario"><i class="fas fa-user-graduate"></i> Área do Aluno</a></li>
            <li><a href="/calendario"><i class="fas fa-calendar-alt"></i> Calendário</a></li>
            <li><a href="/cronograma"><i class="fas fa-list"></i> Cronograma</a></li>
            <li><a href="/materias"><i class="fas fa-book"></i> Matérias</a></li>
            <li><a href="#"><i class="fas fa-pencil-ruler"></i> Simulados</a></li>
            <li><a href="#"><i class="fas fa-comments"></i> Fórum</a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i> Redação</a></li>
            <li><a href="questao"><i class="fas fa-question-circle"></i> Questões</a></li>
            <li><a href="#" style="color: #4cbd97;"><i class="fas fa-cog"></i> Configurações</a></li>
            <li><a href="#" class="logout" style="color: #4cbd97!important;"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            <li class="theme-toggle"><i class="fas fa-moon"></i> Alternar Tema</li> <!-- Botão de alternância de tema -->
        </ul>
    </div>






    <div class="max-w-4xl mx-auto p-4">
        <!-- Cabeçalho -->
        <div class="flex items-center justify-between bg-gray-200 p-4 rounded-lg">
            <div class="flex items-center">
                <button class="text-xl"><i>&#x2190;</i></button>
                <h1 class="ml-2 text-xl font-bold">Matemática Básica</h1>
            </div>
            <div>
                <input type="text" placeholder="Pesquisar" class="bg-gray-100 p-2 rounded-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-300">
            </div>
        </div>

        <!-- Lista de Aulas -->
        <div class="mt-6 bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-bold mb-4">Escolha uma aula</h2>

            <!-- Item de Aula -->
            <div class="space-y-4">
                <div class="border rounded-lg p-4 flex justify-between items-center hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="mr-4 text-xl">&#128339;</span>
                        <div>
                            <p class="font-semibold">20:00</p>
                            <p class="text-gray-600">Adição e Subtração</p>
                        </div>
                    </div>
                    <span class="text-red-500 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
                </div>

                <div class="border rounded-lg p-4 flex justify-between items-center hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="mr-4 text-xl">&#128339;</span>
                        <div>
                            <p class="font-semibold">18:00</p>
                            <p class="text-gray-600">Multiplicação e Divisão</p>
                        </div>
                    </div>
                    <span class="text-red-500 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
                </div>

                <div class="border rounded-lg p-4 flex justify-between items-center hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="mr-4 text-xl">&#128339;</span>
                        <div>
                            <p class="font-semibold">21:00</p>
                            <p class="text-gray-600">Expressões Numéricas</p>
                        </div>
                    </div>
                    <span class="text-red-500 bg-red-100 px-2 py-1 rounded-full text-sm">Alta relevância para o ENEM</span>
                </div>

                <div class="border rounded-lg p-4 flex justify-between items-center hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="mr-4 text-xl">&#128339;</span>
                        <div>
                            <p class="font-semibold">25:00</p>
                            <p class="text-gray-600">Fração</p>
                        </div>
                    </div>
                </div>

                <!-- Item Selecionado -->
                <div class="border rounded-lg p-4 flex justify-between items-center bg-blue-50 border-blue-500">
                    <div class="flex items-center">
                        <span class="mr-4 text-xl">&#10003;</span>
                        <div>
                            <p class="font-semibold">Questões</p>
                            <p class="text-gray-600">Matemática básica</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('checkbox');
    const sidebar = document.querySelector('.sidebar');
    const themeToggle = document.querySelector('.theme-toggle');

    // Verifica se há uma preferência salva no localStorage
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
        sidebar.classList.add('dark-mode');
    }

    // Função para alternar entre tema claro e escuro
    themeToggle.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        sidebar.classList.toggle('dark-mode');

        // Salva a preferência do tema no localStorage
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });

    // Função para esconder/mostrar a barra lateral
    checkbox.addEventListener('change', function () {
        if (this.checked) {
            sidebar.classList.add('hidden');  // Esconde o menu
        } else {
            sidebar.classList.remove('hidden');  // Mostra o menu
        }
    });
});

    </script>
</body>

</html>
