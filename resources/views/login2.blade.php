<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para Gabaritar</title>
    <link rel="icon" href="{{asset('/imagens/mini logo nova(1).png')}}" type="image/x-icon">
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- trocar a cor pela a que esta no figma -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body class="bg-gray-100">
  <!-- Navbar -->
  <header class="bg-gray-200 py-4 shadow">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
      <!-- Ensina+ Logo (Placeholder) -->
      <div class="w-36 h-12 bg-gray-400 flex items-center justify-center text-white">
        Logo
      </div>

      <!-- Divider -->
      <div class="border-l-2 border-black h-12 mx-4"></div>

      <!-- SESI | SENAI Logos (Placeholders) -->
      <div class="flex space-x-8">
        <div class="w-32 h-12 bg-gray-500 flex items-center justify-center text-white">
          SESI Logo
        </div>
        <div class="w-32 h-12 bg-gray-500 flex items-center justify-center text-white">
          SENAI Logo
        </div>
      </div>
    </div>
  </header>
  <!-- Hero Section -->
  <section class="bg-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center px-4 py-16 gap-8">
      <!-- Login Form -->
      <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Faça seu login</h2>
        <form>
          <div class="mb-4">
            <label for="email" class="block text-gray-700">Email ou CPF</label>
            <input type="text" id="email" class="w-full p-3 border rounded-lg" placeholder="Digite seu email ou CPF">
          </div>
          <div class="mb-4">
            <label for="password" class="block text-gray-700">Senha</label>
            <input type="password" id="password" class="w-full p-3 border rounded-lg" placeholder="Digite sua senha">
          </div>
          <div class="mb-4">
            <span class="block text-gray-700 mb-2">Eu sou:</span>
            <label class="inline-flex items-center">
              <input type="radio" name="role" value="aluno" class="form-radio text-blue-500">
              <span class="ml-2">Aluno</span>
            </label>
            <label class="inline-flex items-center ml-6">
              <input type="radio" name="role" value="professor" class="form-radio text-blue-500">
              <span class="ml-2">Professor</span>
            </label>
          </div>
          <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">Acessar</button>
          <a href="#" class="text-blue-600 hover:underline block text-center mt-4">Esqueci minha senha</a>
        </form>
      </div>

      <!-- Hero Image and Call to Action -->
      <div class="text-center">
        <img src="hero-image.png" alt="O Guia Infalível" class="w-full max-w-sm mx-auto">
        <h1 class="text-3xl font-bold mt-4">O Guia Infalível</h1>
        <p class="text-lg text-gray-600">Para Gabaritar</p>
      </div>
    </div>
  </section>

  <!-- Statistics Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-8">A nossa educação em números</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
          <p class="text-4xl font-bold text-blue-600">+12.500</p>
          <p class="mt-2">do Ensino Médio cadastrados</p>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
          <p class="text-4xl font-bold text-blue-600">+400</p>
          <p class="mt-2">questões no repertório</p>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
          <p class="text-4xl font-bold text-blue-600">+700</p>
          <p class="mt-2">aprovações no vestibular</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8">Sobre nós</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-8 bg-gray-100 rounded-lg shadow-lg">
          <p>Plataforma de estudos focada em vestibulares</p>
        </div>
        <div class="p-8 bg-gray-100 rounded-lg shadow-lg">
          <p>Consolida conhecimentos e prepara para exames</p>
        </div>
        <div class="p-8 bg-gray-100 rounded-lg shadow-lg">
          <p>Oferece um ambiente de aprendizado interativo e acessível</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8">Alunos SESI SENAI</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div>
          <img src="fulano.png" alt="Fulano" class="rounded-full w-32 h-32 mx-auto">
          <p class="mt-4 font-bold">Fulano</p>
          <p>Aprovado na USP - Ciência da Computação</p>
        </div>
        <div>
          <img src="ciclana.png" alt="Ciclana" class="rounded-full w-32 h-32 mx-auto">
          <p class="mt-4 font-bold">Ciclana</p>
          <p>Aprovada na UFSCAR - Medicina</p>
        </div>
        <div>
          <img src="beltrano.png" alt="Beltrano" class="rounded-full w-32 h-32 mx-auto">
          <p class="mt-4 font-bold">Beltrano</p>
          <p>Aprovado na UFU - Engenharia Civil</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl font-bold mb-4">Turbina Pré-Vestibular SESI-SP</h2>
      <p class="text-lg mb-8">+ Conteúdo + Resultados + Aprovados</p>
      <a href="#" class="bg-white text-blue-600 py-3 px-6 rounded-lg hover:bg-gray-100">Saiba mais</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4 text-center">
      <p class="mb-4">Ainda não é nosso aluno?</p>
      <a href="#" class="bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700">Conheça nossa proposta de ensino</a>
      <div class="mt-8">
        <p>SESI - MONTE ALTO: Rua Paschoale di Mateo, 301 - Jd. Bela Vista</p>
        <p>SENAI - MONTE ALTO: R. Quinze de Maio, 523 - Centro</p>
        <p class="mt-4">Contato: ce227@gmail.com - (16) 3242-1240</p>
        <p class="mt-2">&copy; 2024 Todos os direitos reservados - DVN</p>
      </div>
    </div>
  </footer>
</body>
</html>