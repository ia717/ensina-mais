<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma da Semana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md w-80">
        <div class="flex items-center justify-between">
            <button id="prevWeek" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                &#9664;
            </button>
            <h2 class="text-gray-800 text-xl font-bold">Cronograma</h2>
            <button id="nextWeek" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                &#9654;
            </button>
        </div>
        <div class="mt-4">
            <div id="weekLabel" class="text-center text-gray-600 text-lg font-bold">Semana 1</div>
            <div id="subjects" class="mt-4 space-y-3">
                <!-- As matérias da semana vão ser inseridas aqui -->
            </div>
        </div>
    </div>

    <script>
        const weeks = [
            ["História", "Química", "Matemática", "Literatura", "Biologia"],
            ["Física", "Geografia", "Inglês", "Artes", "Educação Física"],
            ["Filosofia", "Sociologia", "Espanhol", "Matemática", "História"],
            ["Biologia", "Química", "Física", "Literatura", "Redação"]
        ];

        const colors = ["bg-yellow-400", "bg-green-300", "bg-blue-500", "bg-pink-500", "bg-green-300"];

        let currentWeek = 0;

        function updateSubjects() {
            const subjectsContainer = document.getElementById("subjects");
            const weekLabel = document.getElementById("weekLabel");
            subjectsContainer.innerHTML = "";

            weekLabel.textContent = `Semana ${currentWeek + 1}`;

            weeks[currentWeek].forEach((subject, index) => {
                const button = document.createElement("button");
                button.className = `w-full ${colors[index % colors.length]} text-white py-2 rounded-lg font-semibold hover:${colors[index % colors.length].replace('400', '500').replace('300', '400')} focus:outline-none`;
                button.textContent = subject;
                subjectsContainer.appendChild(button);
            });
        }

        document.getElementById("nextWeek").addEventListener("click", () => {
            currentWeek = (currentWeek + 1) % weeks.length;
            updateSubjects();
        });

        document.getElementById("prevWeek").addEventListener("click", () => {
            currentWeek = (currentWeek - 1 + weeks.length) % weeks.length;
            updateSubjects();
        });

        // Inicializa a primeira semana
        updateSubjects();
    </script>
</body>
</html>
