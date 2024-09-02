<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário de Eventos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md w-80">
        <div class="flex items-center justify-between">
            <button id="prev-month" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                &#9664;
            </button>
            <h2 id="month-year" class="text-gray-800 text-xl font-bold">JANEIRO 2024</h2>
            <button id="next-month" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                &#9654;
            </button>
        </div>
        <div class="mt-4">
            <div id="calendar-days" class="grid grid-cols-7 gap-1 mt-2">
                <!-- Cabeçalho do calendário -->
                <div class="text-gray-400">D</div>
                <div class="text-gray-400">S</div>
                <div class="text-gray-400">T</div>
                <div class="text-gray-400">Q</div>
                <div class="text-gray-400">Q</div>
                <div class="text-gray-400">S</div>
                <div class="text-gray-400">S</div>
            </div>
            <div id="calendar-body" class="grid grid-cols-7 gap-1 mt-2">
                <!-- Dias do mês serão gerados dinamicamente -->
            </div>
        </div>
        <div class="mt-4">
            <h3 class="text-gray-800 text-lg font-bold">Eventos</h3>
            <div class="mt-2">
                <div class="flex items-center mb-2">
                    <span class="w-4 h-4 bg-pink-500 rounded-full inline-block mr-2"></span>
                    <span>20/09 - SIMULADO</span>
                </div>
                <div class="flex items-center mb-2">
                    <span class="w-4 h-4 bg-blue-500 rounded-full inline-block mr-2"></span>
                    <span>04/06 - INSCRIÇÃO UNESP</span>
                </div>
                <div class="flex items-center mb-2">
                    <span class="w-4 h-4 bg-green-500 rounded-full inline-block mr-2"></span>
                    <span>03/11 - ENEM - DIA 1</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Definição dos eventos
        const eventos2024 = {
            '2024-09-20': 'bg-pink-300',   // SIMULADO
            '2024-06-04': 'bg-blue-300',   // INSCRIÇÃO UNESP
            '2024-11-03': 'bg-green-300'   // ENEM - DIA 1
        };

        const daysInMonth = (month, year) => {
            return new Date(year, month + 1, 0).getDate();
        };

        const getFirstDayOfMonth = (month, year) => {
            return new Date(year, month, 1).getDay();
        };

        let currentMonthIndex = 0;
        let currentYear = new Date().getFullYear();
        const monthNames = ['JANEIRO', 'FEVEREIRO', 'MARÇO', 'ABRIL', 'MAIO', 'JUNHO', 'JULHO', 'AGOSTO', 'SETEMBRO', 'OUTUBRO', 'NOVEMBRO', 'DEZEMBRO'];
        const monthYearElement = document.getElementById('month-year');
        const calendarBodyElement = document.getElementById('calendar-body');

        function updateCalendar(monthIndex, year) {
            const monthName = monthNames[monthIndex];
            const days = daysInMonth(monthIndex, year);
            const firstDay = getFirstDayOfMonth(monthIndex, year);

            // Atualiza o nome do mês e ano
            monthYearElement.textContent = `${monthName} ${year}`;

            // Gera os dias do mês com o dia correto da semana
            calendarBodyElement.innerHTML = '';
            for (let i = 0; i < firstDay; i++) {
                calendarBodyElement.innerHTML += `<div></div>`;
            }
            for (let day = 1; day <= days; day++) {
                const dateKey = `${year}-${String(monthIndex + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                const eventClass = eventos2024[dateKey] || 'bg-gray-200 text-gray-800';
                calendarBodyElement.innerHTML += `<div class="day text-center cursor-pointer p-2 rounded-lg ${eventClass}">${day}</div>`;
            }
        }

        document.getElementById('next-month').addEventListener('click', () => {
            // Muda para o próximo mês
            currentMonthIndex = (currentMonthIndex + 1) % 12;
            if (currentMonthIndex === 0) currentYear++;
            updateCalendar(currentMonthIndex, currentYear);
        });

        document.getElementById('prev-month').addEventListener('click', () => {
            // Muda para o mês anterior
            currentMonthIndex = (currentMonthIndex - 1 + 12) % 12;
            if (currentMonthIndex === 11) currentYear--;
            updateCalendar(currentMonthIndex, currentYear);
        });

        // Inicializa o calendário com o mês atual
        updateCalendar(currentMonthIndex, currentYear);
    </script>
</body>
</html>
