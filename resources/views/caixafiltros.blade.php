<!DOCTYPE html>
<html data-theme=nord lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css'])
</head>
<div ></div>
<body class=" flex justify-end h-screen bg-base-200">
  <!-- Caixa de Filtros -->
  <div class="h-full bg-base-100 p-4 rounded-lg shadow-lg transition duration-300 hover:shadow-xl overflow-y-auto">
    <h2 class="text-xl font-medium text-base-content mb-4">Filtrar</h2>
    <div class="space-y-4">
      <div>
        <label for="disciplina" class="block text-base-content mb-1">Disciplina</label>
        <select id="disciplina" class="select select-bordered w-full">
          <option>Matemática</option>
          <option>Português</option>
          <option>Ciências</option>
        </select>
      </div>
      <div>
        <label for="tipo" class="block text-base-content mb-1">Tipo</label>
        <select id="tipo" class="select select-bordered w-full">
          <option>Todas</option>
        </select>
      </div>
      <div>
        <label for="banca" class="block text-base-content mb-1">Banca</label>
        <select id="banca" class="select select-bordered w-full">
          <option>Todas</option>
        </select>
      </div>
      <div>
        <label for="assunto1" class="block text-base-content mb-1">Assunto primário</label>
        <select id="assunto1" class="select select-bordered w-full">
          <option>Todas</option>
        </select>
      </div>
      <div>
        <label for="assunto2" class="block text-base-content mb-1">Assunto secundário</label>
        <select id="assunto2" class="select select-bordered w-full">
          <option>Todas</option>
        </select>
      </div>
      <div>
        <label for="codigo" class="block text-base-content mb-1">Código</label>
        <input type="text" id="codigo" class="input input-bordered w-full">
      </div>
      <button class="btn btn-primary w-full">Filtrar</button>
      <button class="btn btn-secondary w-full mt-2">Baixar PDF</button>
    </div>
  </div>
</body>

</html>
