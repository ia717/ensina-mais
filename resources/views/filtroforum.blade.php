<script>
        function toggleAnswer(id, arrowId) {
            const answer = document.getElementById(id);
            const arrow = document.getElementById(arrowId);
            answer.classList.toggle('hidden');
            answer.classList.toggle('visible');
            arrow.classList.toggle('rotate-180');
        }

        function filterQuestions() {
            const selectedDiscipline = document.getElementById('disciplineFilter').value;
            const cards = document.querySelectorAll('.question-card');
            cards.forEach(card => {
                const discipline = card.getAttribute('data-discipline');
                if (selectedDiscipline === 'all' || discipline === selectedDiscipline) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }

        function searchQuestions() {
            const query = document.getElementById('searchQuery').value.toLowerCase();
            const cards = document.querySelectorAll('.question-card');
            cards.forEach(card => {
                const questionText = card.querySelector('.question-text').textContent.toLowerCase();
                if (questionText.includes(query)) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }
    </script>
<div class="drawer drawer-end lg:drawer-open mr-96 z-10">
  <input id="filtro-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content flex flex-col">
    <!-- Botão para abrir o filtro em telas móveis -->
    <div class="fixed top-0 right-0 p-2 lg:hidden">
      <label for="filtro-drawer" class="btn btn-ghost">
        <!-- Filter Icon -->
        <svg class="h-6 w-6 text-gray-700 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707l-6.414 6.414A1 1 0 0014 13v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5a1 1 0 00-.293-.707L3.293 6.707A1 1 0 013 6V4z" />
        </svg>
      </label>
    </div>
  </div>
  <!-- Sidebar do Filtro -->
  <div class="drawer-side">
    <!-- Overlay para fechar o filtro ao clicar fora -->
    <label for="filtro-drawer" class="drawer-overlay"></label>
    <!-- Caixa de Filtros (sem modificações) -->
    <div class="h-full p-4 rounded-r shadow-lg transition duration-300 hover:shadow-xl overflow-y-auto bg-white text-black dark:text-black dark:bg-neutral-800">
      <h1 class="text-2xl font-bold text-black mb-4 dark:text-white ">Filtrar dúvidas</h1>
      <div class="mb-4">
        <label class="block text-gray-500">Disciplina</label>
        <select id="disciplineFilter" class="w-full p-2 border border-gray-300 rounded-lg" onchange="filterQuestions()">
          <option value="all">Selecione uma disciplina</option>
          <option value="Gramatica">Gramatica</option>
          <option value="Matemática">Matemática</option>
          <option value="História">História</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-500">Professor</label>
        <select id="teacherFilter" class="w-full p-2 border border-gray-300 rounded-lg" onchange="filterQuestions()">
          <option value="all">Todos</option>
          <!-- Adicione opções de professores aqui -->
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-500">Assunto primário</label>
        <select id="primarySubjectFilter" class="w-full p-2 border border-gray-300 rounded-lg" onchange="filterQuestions()">
          <option value="all">Todos</option>
          <!-- Adicione opções de assuntos primários aqui -->
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-500">Assunto secundário</label>
        <select id="secondarySubjectFilter" class="w-full p-2 border border-gray-300 rounded-lg" onchange="filterQuestions()">
          <option value="all">Todos</option>
          <!-- Adicione opções de assuntos secundários aqui -->
        </select>
      </div>
      <button onclick="filterQuestions()" class="font-medium bg-blue-500 text-white px-3 py-2 rounded-lg">Filtrar</button>
    </div>
  </div>
</div>

