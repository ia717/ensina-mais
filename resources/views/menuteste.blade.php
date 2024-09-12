@include('customcss')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
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
            color: black;
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

        @media (max-width: 768px) {
            .sidebar {
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

<body class="user-select-none">
    <!-- Menu Hambúrguer -->
    <input type="checkbox" id="checkbox">
    <label for="checkbox" class="toggle">
        <i class="fas fa-bars fixed"></i>
        <i class="fas fa-times fixed"></i>
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
            <li><a href="forumduvida"><i class="fas fa-comments"></i> Fórum</a></li>
            <li><a href="redacao"><i class="fas fa-file-alt"></i> Redação</a></li>
            <li><a href="questao"><i class="fas fa-question-circle"></i> Questões</a></li>
            <li><a href="#" style="color: #4cbd97;"><i class="fas fa-cog"></i> Configurações</a></li>
            <li><a href="#" class="logout" style="color: #4cbd97!important;"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            <li class="theme-toggle"><i class="fas fa-moon"></i> Alternar Tema</li> <!-- Botão de alternância de tema -->
        </ul>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('checkbox');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            const themeToggle = document.querySelector('.theme-toggle');

            // Verifica se há uma preferência salva no localStorage
            if (localStorage.getItem('theme') === 'dark') {
                document.body.classList.add('dark-mode');
                sidebar.classList.add('dark-mode');
            }

            // Função para alternar entre tema claro e escuro
            themeToggle.addEventListener('click', function() {
                document.body.classList.toggle('dark-mode');
                sidebar.classList.toggle('dark-mode');

                // Salva a preferência do tema no localStorage
                if (document.body.classList.contains('dark-mode')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.setItem('theme', 'light');
                }
            });

            // Função para esconder/mostrar a barra lateral e ajustar o conteúdo
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    sidebar.classList.add('hidden'); // Esconde o menu
                    mainContent.classList.add('hamburger-active'); // Ajusta o conteúdo
                } else {
                    sidebar.classList.remove('hidden'); // Mostra o menu
                    mainContent.classList.remove('hamburger-active'); // Ajusta o conteúdo
                }
            });
        });
    </script>

</body>

</html>