<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <!-- Link para o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            transition: background-color 0.3s, color 0.3s;
        }

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
            transform: translateX(0);
            /* Menu visível por padrão */
            z-index: 1000;
            overflow-y: auto;
        }

        .sidebar.dark-mode {
            background-color: #444;
        }

        .sidebar.hidden {
            transform: translateX(-250px);
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
            left: 15px;
            width: 40px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition-duration: .3s;
            z-index: 1100;
        }

        .toggle i {
            font-size: 24px;
            color: rgb(76, 189, 151);
            transition: transform 0.3s, opacity 0.3s;
        }

        #checkbox:not(:checked)~.toggle i.fa-times {
            display: none;
        }

        #checkbox:not(:checked)~.toggle i.fa-bars {
            display: block;
        }

        #checkbox:checked~.toggle i.fa-times {
            display: block;
        }

        #checkbox:checked~.toggle i.fa-bars {
            display: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                right: 0;
                left: auto;
                transform: translateX(0);
                /* Menu visível por padrão */
                z-index: 1000;
                transition: transform 0.3s ease;
            }

            .toggle {
                left: auto;
                right: 15px;
            }

            .sidebar.hidden {
                transform: translateX(100%);
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

        /* Container do formulário */
        .container {

            padding: 20px;
            border-radius: 10px;

            max-width: 400px;
            width: 100%;
            text-align: center;
            margin: auto;
            position: relative;
            z-index: 900;
        }

        h2 {
            color: #1f4f82;
            margin-bottom: 20px;
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            background-color: #d7d2d2;
            border-radius: 50%;
            margin: 0 auto;
            position: relative;
        }

        .change-photo {
            display: inline-block;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .change-photo:hover {
            text-decoration: underline;
        }

        .radio-group {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .radio-group label {
            margin: 0 10px;
            font-size: 16px;
            color: #666;
        }

        .radio-group input[type="radio"] {
            margin-right: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 20px;
            border: 1px solid #e2e2e2;
            background-color: #e6eaed;
            font-size: 16px;
            box-sizing: border-box;
        }

        .btn-save {
            background-color: #31609a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            box-sizing: border-box;
        }

        .btn-save:hover {
            background-color: #24496d;
        }

        #fileInput {
            display: none;
        }

        #profilePic {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Menu Hambúrguer -->
    <input type="checkbox" id="checkbox">
    <label for="checkbox" class="toggle">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </label>

    <!-- Menu Lateral -->
    <div class="sidebar">
        <ul>
            <li><a href="/home"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="/usuario"><i class="fas fa-user-graduate"></i> Área do Aluno</a></li>
            <li><a href="/calendario"><i class="fas fa-calendar-alt"></i> Calendário</a></li>
            <li><a href="/cronograma"><i class="fas fa-list"></i> Cronograma</a></li>
            <li><a href="/materias"><i class="fas fa-book"></i> Disciplinas</a></li>
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
    <div class="container">
        <h2>Editar perfil</h2>
        <div class="profile-pic">
            <img id="profilePic" src="" alt="">
        </div>
        <a href="#" class="change-photo" id="changePhotoBtn">Alterar foto de perfil</a>
        <input type="file" id="fileInput" accept="image/*">

        <div class="radio-group">
            <label><input type="radio" name="role" value="aluno"> Aluno</label>
            <label><input type="radio" name="role" value="professor"> Professor</label>
            <label><input type="radio" name="role" value="administrador"> Administrador</label>
        </div>

        <input type="text" placeholder="Nome">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Senha">

        <select>
            <option>Selecione uma opção</option>
            <option value="value1">Opção 1</option>
            <option value="value2">Opção 2</option>
            <option value="value3">Opção 3</option>
        </select>

        <button class="btn-save">Salvar</button>
    </div>

    <script>
        const themeToggle = document.querySelector('.theme-toggle');
        const body = document.body;
        const sidebar = document.querySelector('.sidebar');

        themeToggle.addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            sidebar.classList.toggle('dark-mode');
        });

        const fileInput = document.getElementById('fileInput');
        const profilePic = document.getElementById('profilePic');
        const changePhotoBtn = document.getElementById('changePhotoBtn');

        changePhotoBtn.addEventListener('click', function() {
            fileInput.click();
        });

        fileInput.addEventListener('change', function() {
            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                profilePic.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        // Função para alternar a visibilidade do menu lateral
        const toggleMenu = document.querySelector('.toggle');

        toggleMenu.addEventListener('click', function() {
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>

</html>