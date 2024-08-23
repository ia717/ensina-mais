<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matérias</title>
    <!-- Link para o Font Awesome -->
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
            transform: translateX(0); /* Mostra o menu por padrão */
            z-index: 1000;
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
            margin-left: 245px;
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
            transition: margin-left 0.3s ease;
        }

        .main-content.hamburger-active {
            margin-left: 0; /* Move o conteúdo para a esquerda quando o menu é escondido */
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
            background-color: #cce5ff;
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
            color: #6c757d;
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

        /* Responsividade */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                left: 0;
            }

            .main-content {
                margin-left: 0;
                padding: 3rem;
            }
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
        <h1>Matérias</h1>

        <div class="category">
            <h2>Matemática</h2>
            <div class="subject-grid">
                <div class="subject math">
                    <i class="fas fa-calculator"></i>
                    <span>Matemática</span>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Ciências da Natureza</h2>
            <div class="subject-grid">
                <div class="subject science">
                    <i class="fas fa-leaf"></i>
                    <span>Biologia</span>
                </div>
                <div class="subject science">
                    <i class="fas fa-flask"></i>
                    <span>Química</span>
                </div>
                <div class="subject science">
                    <i class="fas fa-atom"></i>
                    <span>Física</span>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Ciências Humanas</h2>
            <div class="subject-grid">
                <div class="subject humanities">
                    <i class="fas fa-landmark"></i>
                    <span>História</span>
                </div>
                <div class="subject humanities">
                    <i class="fas fa-globe-americas"></i>
                    <span>Geografia</span>
                </div>
                <div class="subject humanities">
                    <i class="fas fa-balance-scale"></i>
                    <span>Sociologia</span>
                </div>
                <div class="subject humanities">
                    <i class="fas fa-gavel"></i>
                    <span>Filosofia</span>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Linguagens</h2>
            <div class="subject-grid">
                <div class="subject languages">
                    <i class="fas fa-font"></i>
                    <span>Gramática</span>
                </div>
                <div class="subject languages">
                    <i class="fas fa-book-open"></i>
                    <span>Literatura</span>
                </div>
                <div class="subject languages">
                    <i class="fas fa-pencil-alt"></i>
                    <span>Redação</span>
                </div>
                <div class="subject languages">
                    <i class="fas fa-language"></i>
                    <span>Inglês</span>
                </div>
                <div class="subject languages">
                    <i class="fas fa-palette"></i>
                    <span>Artes</span>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Guia de Preparação</h2>
            <div class="subject-grid">
                <div class="subject preparation">
                    <i class="fas fa-star"></i>
                    <span>Guia de Preparação</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const checkbox = document.getElementById('checkbox');
        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.querySelector('.main-content');

        // Função para esconder/mostrar a barra lateral
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                sidebar.classList.add('hidden');  // Esconde o menu
                mainContent.classList.add('hamburger-active'); // Ajusta o conteúdo
            } else {
                sidebar.classList.remove('hidden');  // Mostra o menu
                mainContent.classList.remove('hamburger-active'); // Ajusta o conteúdo
            }
        });
    </script>

</body>

</html>
