
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão e Filtro com Menu Lateral</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
            background-color: #f5f5f5;
            transition: background-color 0.3s, color 0.3s;
        }

        

        /* Conteúdo Principal */
        .main-content {
            margin-left: 250px;
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            transition: margin-left 0.3s ease;
            display: flex;
            gap: 20px;
            background-color: #f3eeee;
            box-sizing: border-box;
        }

        .question-container {
            flex: 2;
            background-color: #fff;
            padding: 20px;
            height: 200vh;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .question-container h1 {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .question-container p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .question-container ul {
            list-style-type: none;
            padding: 0;
        }

        .question-container ul li {
            margin-bottom: 10px;
        }

        .question-container ul li label {
            margin-left: 5px;
        }

        .filters-container {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            height: fit-content;
        }

        .filters-container h2 {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .filters-container select,
        .filters-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f3eeee;
            box-sizing: border-box;
        }

        .filters-container button {
            background-color: #4cbd97;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
    .main-content {
        flex-direction: column; /* Empilha os elementos verticalmente */
        margin-left: 0; /* Remove a margem esquerda */
        padding: 10px; /* Ajusta o padding para dispositivos menores */
        width: 100%; /* Garante que o conteúdo ocupe toda a largura da tela */
        box-sizing: border-box; /* Inclui o padding na largura total */
    }

    .question-container,
    .filters-container {
        width: 100%; /* Garante que cada contêiner ocupe toda a largura disponível */
        margin-bottom: 20px; /* Espaçamento entre os contêineres */
        box-sizing: border-box; /* Inclui o padding na largura total */
    }

    .question-container {
        height: auto; /* Ajusta a altura automaticamente conforme o conteúdo */
    }

    /* Ajuste para o botão de responder não ultrapassar a largura */
    .btn-responder {
        width: 100%; /* Faz o botão ocupar toda a largura do contêiner */
        padding: 10px; /* Ajusta o padding para telas menores */
    }
}

        



   

     

      
        .btn-responder {
    background-color: #90ee90; /* Verde claro */
    color: white;
    font-size: 16px;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-responder:hover {
    background-color: #77dd77; /* Cor mais escura ao passar o mouse */
    transform: scale(1.05); /* Leve aumento no tamanho */
}

.btn-responder:active {
    transform: scale(0.98); /* Efeito de pressionado */
}

/*menuuu*/
  /* Estilo para o tema escuro */
  body.dark-mode {
    background-color: #333;
    color: #fff; /* Cor do texto no tema escuro */
}
.main-content.dark-mode {
    background-color: #2b2b2b; /* Fundo escuro para o conteúdo principal */
}
.question-container.dark-mode {
    background-color: #3a3a3a; /* Fundo escuro para o contêiner de questões */
    color: #fff; /* Cor do texto no tema escuro */
}
.filters-container.dark-mode {
    background-color: #3a3a3a; /* Fundo escuro para o contêiner de filtros */
    color: #fff; /* Cor do texto no tema escuro */
}
/* Botões */
.btn-responder.dark-mode {
    background-color: #4cbd97; /* Cor do botão no tema escuro */
    color: #333; /* Cor do texto no botão no tema escuro */
}
.filters-container.dark-mode button {
    background-color: #4cbd97; /* Cor do botão no tema escuro */
    color: #333; /* Cor do texto no botão no tema escuro */
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

            #checkbox:checked ~ .sidebar {
                transform: translateX(0); /* Mostra o menu quando o checkbox está marcado */
            }
            #checkbox:not(:checked) ~ .toggle i.fa-bars {
            display: block;
        }

        #checkbox:not(:checked) ~ .toggle i.fa-times {
            display: none;
        }

        /* Quando o menu está aberto */
        #checkbox:checked ~ .toggle i.fa-bars {
            display: none;
        }

        #checkbox:checked ~ .toggle i.fa-times {
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
    <!-- Menu Lateral -->
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
   

    <!-- Conteúdo Principal -->
    <div class="main-content">
        <div class="question-container">

<button class="btn-responder">Responder</button>


<h1>1- Em um projeto para a construção de um cinema, os arquitetos estão avaliando a relação entre a quantidade de fileiras e a quantidade de cadeiras em cada fileira.</h1>
<p>O projeto inicial prevê uma sala para 304 pessoas. No caso de utilizarem 19 fileiras, o número de cadeiras por fileira será?</p>
<ul>
    <li>
        <input type="radio" id="option1-1" name="options1">
        <label for="option1-1">14</label>
    </li>
    <li>
        <input type="radio" id="option2-1" name="options1">
        <label for="option2-1">15</label>
    </li>
    <li>
        <input type="radio" id="option3-1" name="options1">
        <label for="option3-1">16</label>
    </li>
    <li>
        <input type="radio" id="option4-1" name="options1">
        <label for="option4-1">13</label>
    </li>
    <li>
        <input type="radio" id="option5-1" name="options1">
        <label for="option5-1">12</label>
    </li>
</ul>
<button class="btn-responder">Responder</button>


<h1>1- Em um projeto para a construção de um cinema, os arquitetos estão avaliando a relação entre a quantidade de fileiras e a quantidade de cadeiras em cada fileira.</h1>
<p>O projeto inicial prevê uma sala para 304 pessoas. No caso de utilizarem 19 fileiras, o número de cadeiras por fileira será?</p>
<ul>
    <li>
        <input type="radio" id="option1-1" name="options1">
        <label for="option1-1">14</label>
    </li>
    <li>
        <input type="radio" id="option2-1" name="options1">
        <label for="option2-1">15</label>
    </li>
    <li>
        <input type="radio" id="option3-1" name="options1">
        <label for="option3-1">16</label>
    </li>
    <li>
        <input type="radio" id="option4-1" name="options1">
        <label for="option4-1">13</label>
    </li>
    <li>
        <input type="radio" id="option5-1" name="options1">
        <label for="option5-1">12</label>
    </li>
</ul>
<button class="btn-responder">Responder</button>


        </div>
        <div class="filters-container">
            <h2 >Filtros</h2>
            <input type="text" placeholder="Pesquisar...">
            <select>
                <option value="">Ordenar por</option>
                <option value="recent">Mais recente</option>
                <option value="popular">Mais popular</option>
            </select>
            <button>Aplicar</button>
        </div>
    </div>



 <script>
    document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('checkbox');
    const sidebar = document.querySelector('.sidebar');
    const themeToggle = document.querySelector('.theme-toggle');

    // Elementos adicionais que precisam do tema escuro
    const mainContent = document.querySelector('.main-content');
    const filtersContainer = document.querySelector('.filters-container');
    const questionContainers = document.querySelectorAll('.question-container');
    const responderButtons = document.querySelectorAll('.btn-responder');

    // Verifica se há uma preferência salva no localStorage
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
        sidebar.classList.add('dark-mode');
        mainContent.classList.add('dark-mode');
        filtersContainer.classList.add('dark-mode');
        questionContainers.forEach(container => container.classList.add('dark-mode'));
        responderButtons.forEach(button => button.classList.add('dark-mode'));
    }

    // Função para alternar entre tema claro e escuro
    themeToggle.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        sidebar.classList.toggle('dark-mode');
        mainContent.classList.toggle('dark-mode');
        filtersContainer.classList.toggle('dark-mode');
        questionContainers.forEach(container => container.classList.toggle('dark-mode'));
        responderButtons.forEach(button => button.classList.toggle('dark-mode'));

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

