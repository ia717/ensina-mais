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
            transform: translateX(-250px);
            z-index: 1000;
        }

        .sidebar.open {
            transform: translateX(0);
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

        .sidebar ul li i {
            margin-right: 10px;
        }

        .sidebar ul li a:hover {
            background-color: #f0f0f0;
            padding-left: 10px;
            transition: padding-left 0.3s;
        }

        .sidebar ul li a.logout {
            color: red;
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

        /* Responsividade */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                left: 0;
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                flex-direction: column;
                padding: 15px;
            }

            .top-right-icons {
                display: none;
            }

            .dark-mode-toggle {
                bottom: 15px;
                right: 15px;
                width: 40px;
                height: 40px;
            }
        }

        .dark-mode-toggle {
            position: fixed;
            bottom: 15px;
            right: 15px;
            width: 50px;
            height: 50px;
            background-color: #f0f0f0;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, color 0.3s;
            z-index: 1000;
        }

        .dark-mode-toggle i {
            color: #000;
        }

        .dark-mode {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }

        .dark-mode .sidebar {
            background-color: #2c2c2c;
        }

        .dark-mode .sidebar ul li a {
            color: #e0e0e0;
        }

        .dark-mode .sidebar ul li a:hover {
            background-color: #444;
        }

        .dark-mode-toggle.dark {
            background-color: #333;
        }

        .dark-mode-toggle.dark i {
            color: #fff;
        }

        /* Menu Hambúrguer */
        #checkbox {
            display: none;
        }

        .toggle {
            position: fixed;
            top: 15px;
            left: 15px;
            width: 40px;
            height: 30px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition-duration: .3s;
            z-index: 1100;
        }

        .bars {
            width: 100%;
            height: 4px;
            background-color: rgb(76, 189, 151);
            border-radius: 5px;
            transition-duration: .3s;
        }

        #checkbox:checked + .toggle .bars {
            margin-left: 13px;
        }

        #checkbox:checked + .toggle #bar2 {
            transform: rotate(135deg);
            margin-left: 0;
            transform-origin: center;
            transition-duration: .3s;
        }

        #checkbox:checked + .toggle #bar1 {
            transform: rotate(45deg);
            transition-duration: .3s;
            transform-origin: left center;
        }

        #checkbox:checked + .toggle #bar3 {
            transform: rotate(-45deg);
            transition-duration: .3s;
            transform-origin: left center;
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

    </style>
</head>

<body>
    <!-- Menu Hambúrguer -->
    <input type="checkbox" id="checkbox">
    <label for="checkbox" class="toggle">
        <div class="bars" id="bar1"></div>
        <div class="bars" id="bar2"></div>
        <div class="bars" id="bar3"></div>
    </label>

    <!-- Menu Lateral -->
    <div class="sidebar">
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-user-graduate"></i> Área do Aluno</a></li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i> Calendário</a></li>
            <li><a href="#"><i class="fas fa-list"></i> Cronograma</a></li>
            <li><a href="#"><i class="fas fa-book"></i> Matérias</a></li>
            <li><a href="#"><i class="fas fa-pencil-ruler"></i> Simulados</a></li>
            <li><a href="#"><i class="fas fa-comments"></i> Fórum</a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i> Redação</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i> Questões</a></li>
            <li><a href="#" style="color: red;"><i class="fas fa-cog"></i> Configurações</a></li>
            <li><a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Conteúdo Principal -->
    <div class="main-content">
        <div class="question-container">
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


<h1>2- Em um projeto para a construção de um cinema, os arquitetos estão avaliando a relação entre a quantidade de fileiras e a quantidade de cadeiras em cada fileira.</h1>
<p>O projeto inicial prevê uma sala para 304 pessoas. No caso de utilizarem 19 fileiras, o número de cadeiras por fileira será?</p>
<ul>
    <li>
        <input type="radio" id="option1-2" name="options2">
        <label for="option1-2">14</label>
    </li>
    <li>
        <input type="radio" id="option2-2" name="options2">
        <label for="option2-2">15</label>
    </li>
    <li>
        <input type="radio" id="option3-2" name="options2">
        <label for="option3-2">16</label>
    </li>
    <li>
        <input type="radio" id="option4-2" name="options2">
        <label for="option4-2">13</label>
    </li>
    <li>
        <input type="radio" id="option5-2" name="options2">
        <label for="option5-2">12</label>
    </li>
</ul>
<button class="btn-responder">Responder</button>


<h1>3- Em um projeto para a construção de um cinema, os arquitetos estão avaliando a relação entre a quantidade de fileiras e a quantidade de cadeiras em cada fileira.</h1>
<p>O projeto inicial prevê uma sala para 304 pessoas. No caso de utilizarem 19 fileiras, o número de cadeiras por fileira será?</p>
<ul>
    <li>
        <input type="radio" id="option1-3" name="options3">
        <label for="option1-3">14</label>
    </li>
    <li>
        <input type="radio" id="option2-3" name="options3">
        <label for="option2-3">15</label>
    </li>
    <li>
        <input type="radio" id="option3-3" name="options3">
        <label for="option3-3">16</label>
    </li>
    <li>
        <input type="radio" id="option4-3" name="options3">
        <label for="option4-3">13</label>
    </li>
    <li>
        <input type="radio" id="option5-3" name="options3">
        <label for="option5-3">12</label>
    </li>
</ul>
<button class="btn-responder">Responder</button>


        </div>
        <div class="filters-container">
            <h2>Filtros</h2>
            <input type="text" placeholder="Pesquisar...">
            <select>
                <option value="">Ordenar por</option>
                <option value="recent">Mais recente</option>
                <option value="popular">Mais popular</option>
            </select>
            <button>Aplicar</button>
        </div>
    </div>

    <!-- Botão de Dark Mode -->
    <button class="dark-mode-toggle" id="darkModeToggle">
        <i class="fa fa-moon"></i>
    </button>

    <script>
        const checkbox = document.getElementById("checkbox");
        const sidebar = document.querySelector(".sidebar");
        const darkModeToggle = document.getElementById("darkModeToggle");
        const body = document.body;

        checkbox.addEventListener("change", function () {
            sidebar.classList.toggle("open");
        });

        darkModeToggle.addEventListener("click", function () {
            body.classList.toggle("dark-mode");
            darkModeToggle.classList.toggle("dark");
        });
    </script>
</body>

</html>
