<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Cabeçalho -->
    <header class="bg-gray-100 shadow">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="https://via.placeholder.com/40" alt="Logo" class="w-10 h-10">
                <span class="border-l border-gray-500 pl-2 flex items-center space-x-2">
                    <img src="https://via.placeholder.com/60x20?text=SESI" alt="SESI" class="inline h-6">
                    <img src="https://via.placeholder.com/60x20?text=SENAI" alt="SENAI" class="inline h-6">
                </span>
            </div>
            <a href="#" class="text-teal-600 hover:text-teal-800">Login</a>
        </div>
    </header>

    <!-- Barra de Navegação -->
    <nav class="bg-teal-600">
        <div class="container mx-auto px-4 py-3 flex justify-center space-x-8">
            <a href="#" class="text-white font-semibold hover:underline">Sobre nós</a>
            <a href="#" class="text-white font-semibold hover:underline">Mural dos Aprovados</a>
            <a href="#" class="text-white font-semibold hover:underline">Nossa Metodologia</a>
            <a href="#" class="text-white font-semibold hover:underline">Estude Conosco</a>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="container mx-auto px-4 py-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Título da Seção</h2>
            <p class="text-gray-700">Aqui você pode adicionar o conteúdo da sua página. Esta é uma seção de exemplo onde você pode colocar texto, imagens, ou qualquer outro tipo de conteúdo que desejar.</p>
            <!-- Você pode adicionar mais conteúdo aqui -->
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Seu Nome ou Empresa. Todos os direitos reservados.</p>
            <p>
                <a href="#" class="text-gray-400 hover:text-white">Política de Privacidade</a> |
                <a href="#" class="text-gray-400 hover:text-white">Termos de Serviço</a>
            </p>
        </div>
    </footer>

</body>
</html>