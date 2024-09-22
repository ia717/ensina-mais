// Exibir e ocultar respostas
document.querySelectorAll('.toggle-button').forEach((button) => {
    button.addEventListener('click', function() {
        const resposta = this.nextElementSibling;
        resposta.classList.toggle('hidden');
        this.textContent = resposta.classList.contains('hidden') ? 'Respostas' : 'Ocultar Resposta';
    });
});

// Mostrar disciplina e tópico de acordo com a disciplina selecionada
document.getElementById('discipline').addEventListener('change', function() {
    const disciplineId = this.value;
    const topicSelect = document.getElementById('topic');

    if (disciplineId) {
        fetch(`/topics/${disciplineId}`)
            .then(response => response.json())
            .then(data => {
                topicSelect.innerHTML = '<option value="">Selecione um tópico</option>';
                data.forEach(topic => {
                    const option = document.createElement('option');
                    option.value = topic.id;
                    option.textContent = topic.name;
                    topicSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao carregar os tópicos:', error));
    } else {
        topicSelect.innerHTML = '<option value="">Selecione um tópico</option>';
    }
});

// Mesmo código para o filtro
document.getElementById('filter-discipline').addEventListener('change', function() {
    const disciplineId = this.value;
    const topicSelect = document.getElementById('filter-topic');

    if (disciplineId) {
        fetch(`/topics/${disciplineId}`)
            .then(response => response.json())
            .then(data => {
                topicSelect.innerHTML = '<option value="">Selecione um tópico</option>';
                data.forEach(topic => {
                    const option = document.createElement('option');
                    option.value = topic.id;
                    option.textContent = topic.name;
                    topicSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao carregar os tópicos:', error));
    } else {
        topicSelect.innerHTML = '<option value="">Selecione um tópico</option>';
    }
});

document.getElementById('discipline').addEventListener('change', function() {
    const disciplineId = this.value;
    const topicSelect = document.getElementById('topic');

    // Limpa o campo de tópicos ao selecionar uma nova disciplina
    topicSelect.innerHTML = '<option value="">Selecione um tópico</option>';

    if (disciplineId) {
        fetch(`/topics-by-discipline/${disciplineId}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(topic => {
                    const option = document.createElement('option');
                    option.value = topic.id;
                    option.textContent = topic.name;
                    topicSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao buscar tópicos:', error));
    }
});
