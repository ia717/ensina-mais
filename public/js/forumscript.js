// Função para atualizar tópicos
function updateTopics(disciplineId, selectElement) {
    selectElement.innerHTML = '<option value="">Selecione um tópico</option>'; // Limpa o select

    if (disciplineId) {
        fetch(`/topics/${disciplineId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro na rede');
                }
                return response.json();
            })
            .then(data => {
                const existingValues = new Set(Array.from(selectElement.options).map(option => option.value));

                data.forEach(topic => {
                    if (!existingValues.has(topic.id)) {
                        const option = document.createElement('option');
                        option.value = topic.id;
                        option.textContent = topic.name;
                        selectElement.appendChild(option);
                    }
                });
            })
            .catch(error => console.error('Erro ao carregar os tópicos:', error));
    }
}

// Evento para o select de disciplina no formulário
document.getElementById('discipline').addEventListener('change', function() {
    const disciplineId = this.value;
    const topicSelect = document.getElementById('topic');
    updateTopics(disciplineId, topicSelect); // Chama a função para atualizar tópicos
});

// Evento para o select de disciplina no filtro
document.getElementById('filter-discipline').addEventListener('change', function() {
    const disciplineId = this.value;
    const filterTopicSelect = document.getElementById('filter-topic');
    updateTopics(disciplineId, filterTopicSelect); // Chama a função para atualizar tópicos
});

// Exibir e ocultar respostas
document.querySelectorAll('.toggle-button').forEach((button) => {
    button.addEventListener('click', function() {
        const resposta = this.nextElementSibling;
        resposta.classList.toggle('hidden');
        this.textContent = resposta.classList.contains('hidden') ? 'Respostas' : 'Ocultar Resposta';
    });
});
