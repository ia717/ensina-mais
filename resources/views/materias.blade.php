@include('menuteste')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matérias</title>
    <!-- Link para o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Conteúdo Principal */
        .main-content {
            margin-left: 245px;
            flex: 1;
            padding: 1.5rem;
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
            background-color: #F79014;
        }

        .science {
            background-color: #21C61C;
        }

        .humanities {
            background-color: #F2DA2F;
        }

        .languages {
            background-color: #ffa1c4;
        }

        .preparation {
            background-color: #BE7EE8;
        }

        /* Ícones específicos para as matérias */
        .subject.math i {
            color: #ffc107;
        }

        .subject.science i {
            color: #aff999;
        }

        .subject.humanities i {
            color: #ffc107;
        }

        .subject.languages i {
            color: #E53CC6;
        }

        .subject.preparation i

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
            color: red;
        }

        body.dark-mode h1,
        body.dark-mode h2 {
            color: #fff;
            /* Títulos em branco */
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
            top: 5px;
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

        @media (max-width: 768px) {

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
        <h1>Matérias</h1>

        <div class="category">
            <h2></h2>
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
                    <i class="fas fa-flask"></i>
                    <span>Química</span>
                </div>
                <div class="subject science">
                    <i class="fas fa-atom"></i>
                    <span>Física</span>
                </div>
                <div class="subject science">
                    <i class="fas fa-leaf"></i>
                    <span>Biologia</span>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Ciências Humanas</h2>
            <div class="subject-grid">
                <div class="subject humanities">
                    <i class="fas fa-globe"></i>
                    <span>Geografia</span>
                </div>
                <div class="subject humanities">
                    <i class="fas fa-landmark"></i>
                    <span>História</span>
                </div>
                <div class="subject humanities">
                    <i class="fas fa-balance-scale"></i>
                    <span>Filosofia</span>
                </div>
                <div class="subject humanities">
                    <i class="fas fa-users"></i>
                    <span>Sociologia</span>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Linguagens</h2>
            <div class="subject-grid">
                <div class="subject languages">
                    <i class="fas fa-book-open"></i>
                    <span>Português</span>
                </div>
                <div class="subject languages">
                    <i class="fas fa-book"></i>
                    <span>Literatura</span>
                </div>
                <div class="subject languages">
                    <i class="fas fa-language"></i>
                    <span>Língua Estrangeira</span>
                </div>
                <div class="subject languages">
                    <i class="fas fa-paint-brush"></i>
                    <span>Artes</span>
                </div>
                <div class="subject languages">
                    <i class="fas fa-music"></i>
                    <span>Educação Física</span>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Preparação para o ENEM</h2>
            <div class="subject-grid">
                <div class="subject preparation">
                    <i class="fas fa-pencil-alt"></i>
                    <span>Redação</span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
    <!--
<div class="max-w-7xl mx-auto p-6 lg:p-8">
<<<<<<< HEAD
    <x-theme-toggle/>-->
=======
    <x-theme-toggle />
>>>>>>> 76299679aa2cc658180f3082ffb49bf24069453b
