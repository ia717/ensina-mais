<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para Gabaritar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="flex items-center space-x-4">
                <img src="logo.png" alt="Logo" class="w-10 h-10">
                <h1 class="text-2xl font-bold text-black">Para Gabaritar</h1>
            </div>
            
            <div class="flex space-x-4">
                <img src="sesi-logo.png" alt="SESI" class="w-16 h-auto">
                <img src="senai-logo.png" alt="SENAI" class="w-16 h-auto">
                <a href="#" class="text-gray-700 hover:text-green-600">Login</a>
            </div>
        </div>
    </header>
    <section class="bg-[#6ee7b7] shadow-md p-2">
    <nav class="flex space-x-8">
                <a href="#" class="text-white-700 hover:text-green-600">Sobre nós</a>
                <a href="#" class="text-white-700 hover:text-green-600">Nossa Metodologia</a>
                <a href="#" class="text-white-700 hover:text-green-600">Estude Conosco</a>
            </nav>
    </section>
    <!-- Main Content -->
    <main class="container mx-auto mt-8 p-4 flex space-x-8">
        <!-- Login Form -->
        <div class="bg-white shadow-lg rounded-lg p-8 w-1/3">
            <h2 class="text-xl font-bold mb-6">Faça seu login</h2>
            <form>
                <label class="block mb-4">
                    <span class="text-gray-700">Email ou CPF</span>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50" placeholder="Digite seu Email ou CPF">
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Senha</span>
                    <input type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50" placeholder="Digite sua Senha">
                </label>
                <div class="mb-4">
                    <span class="text-gray-700">Eu sou:</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Aluno">
                            <span class="ml-2">Aluno</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Professor">
                            <span class="ml-2">Professor</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700">Acessar</button>
                <a href="#" class="block text-center mt-4 text-green-600 hover:underline">Esqueci minha senha</a>
            </form>
        </div>

        <!-- Promotional Section -->
        <div class="relative bg-white shadow-lg rounded-lg w-2/3 overflow-hidden">
        <video   src="{{ asset('videos/Para Gabaritar.mp4') }}" alt="" target="_blank" controls autoplay loop></video>
            <div class="absolute top-0 right-0 p-8">
            </div>
        </div>
    </main>
    <div class="container mx-auto p-8">
        <!-- Section Title -->
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-4xl font-bold text-black mb-4">A nossa educação em números</h2>
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 bg-pink-500"></div>
                <div class="w-16 h-16 bg-green-500"></div>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="bg-green-300 text-white rounded-lg p-8 mt-8 flex items-center justify-around relative">
            <div class="flex-1 text-center">
                <p class="text-4xl font-bold">+12.500</p>
                <p>do Ensino Médio cadastrados</p>
            </div>
            <div class="flex-1 text-center">
                <p class="text-4xl font-bold">+400</p>
                <p>questões no repertório</p>
            </div>
            <div class="flex-1 text-center">
                <p class="text-4xl font-bold">+700</p>
                <p>aprovações no vestibular</p>
            </div>
            <!-- Decorative Circles -->
            <div class="absolute top-0 right-0 w-24 h-24 bg-orange-500 rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-16 h-16 bg-orange-600 rounded-full"></div>
        </div>

        <!-- About Us Section -->
        <div class="mt-12">
            <h3 class="text-3xl font-bold text-black mb-4">Sobre nós +</h3>
            <div class="flex space-x-8">
                <div class="bg-white shadow-lg rounded-lg p-6 w-1/2">
                    <ul class="list-disc pl-4 space-y-2 text-gray-700">
                        <li>Plataforma de estudos focada em vestibulares</li>
                        <li>Criada pela escola para apoio aos alunos</li>
                        <li>Combina conteúdos teóricos, exercícios, videoaulas e simulados</li>
                    </ul>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 w-1/2">
                    <ul class="list-disc pl-4 space-y-2 text-gray-700">
                        <li>Consolida conhecimentos e prepara para exames</li>
                        <li>Aumenta as chances de sucesso acadêmico</li>
                        <li>Oferece um ambiente de aprendizado interativo e acessível</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
