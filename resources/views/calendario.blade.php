<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-50 font-sans h-screen flex flex-col">

    <div class="flex flex-1">
       
        <aside class="w-64 duration-300 hidden lg:block">
            @include("menuteste")
        </aside>

        <main class="flex-1 flex flex-col justify-center items-center p-4 lg:p-6">
        <div class="block md:hidden w-full">
            @include('headernav')
        </div>
            <div class="w-full max-w-3xl bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <header class="flex items-center">
                    <button  class="text-gray-500 hover:text-gray-800 focus:outline-none">
                        <i class="fas fa-chevron-left"></i>
                    </button>    
                    <h1 class="text-3xl font-bold mx-4">Calendário</h1>
                  
                </header>

                <hr class="border-t border-gray-300 my-6">

              
                <div class="flex flex-col sm:flex-row items-center sm:space-x-2 mt-6">
                    <div class="relative flex items-center w-1/2">
                        <svg class="absolute left-2 text-gray-500" fill="#9ca3af" width="25px" height="25px" viewBox="0 0 256.00098 256.00098">
                            <path d="M240.00098,56H16c-8.836,0-16,7.164-16,16v168c0,8.836,7.164,16,16,16h224c8.836,0,16-7.164,16-16V72C256.00098,64.164,248.83698,56,240.00098,56z M216,216H40V96h176V216z M232,80H24v8h208V80z"></path>
                        </svg>
                        <input type="text" placeholder="Pesquisar eventos" class="placeholder-gray-400 w-full pr-4 pl-10 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button class="text-gray-600 dark:text-gray-100 mt-2 sm:mt-0">Filtrar</button>
                    </div>
                </div>

                <div class="flex flex-col items-center mt-8 px-4">
                    <div class="flex items-center justify-between w-full max-w-md">
                     
                        <button id="prev-month-btn" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                        <i class="fas fa-chevron-left"></i>
                    </button> 
                        <h2 id="month-year" class="text-gray-800 text-xl font-bold px-2">JANEIRO 2024</h2>
                        <button id="next-month-btn" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    </div>
                    <div class="mt-4 w-full max-w-md">
                        <div id="calendar-days" class="grid grid-cols-7 gap-1 mt-2 text-center text-gray-400 text-sm sm:text-base">
                            <!-- Cabeçalho do calendário -->
                        </div>
                        <div id="calendar-body" class="grid grid-cols-7 gap-6 mt-2 text-center">
                            <!-- Dias do mês -->
                        </div>
                    </div>
                </div>

                <!-- Formulário de eventos -->
                <div class="justify-center flex-col items-center mt-8">
                    <hr class="border-t border-gray-300 my-6">
                    <div class="flex flex-col items-center">
                        <h1 class="text-4xl font-bold text-[#646464]">Eventos</h1>
                    </div>
                    <div class="flex flex-wrap justify-center space-x-4 mt-4">
                        <div class="w-20 h-10 text-white bg-[#EB07FF] flex items-center justify-center rounded-lg">
                            <p class="text-center">20/09</p>
                        </div>
                        <p class="self-center">Simulado</p>
                        <div class="w-20 h-10 bg-[#3A89FF] text-white flex items-center justify-center rounded-lg">
                            <p class="text-center">20/09</p>
                        </div>
                        <p class="self-center">Simulado</p>
                        <div class="w-20 h-10 bg-[#129F75] text-white flex items-center justify-center rounded-lg">
                            <p class="text-center">20/09</p>
                        </div>
                        <p class="self-center">Simulado</p>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-center items-center space-x-2 mt-4">
                        <input type="text" placeholder="Adicionar novo evento" class="p-2 border rounded-lg text-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-lg mt-2 sm:mt-0">Salvar evento</button>
                    </div>
                    <hr class="border-t border-gray-300 my-6">
                </div>

                <!-- Sugestões de eventos -->
                <div class="mt-10 hidden sm:flex flex-col">
                    <h3 class="text-center text-xl font-semibold mb-4">Saiba +</h3>
                    <div class="flex flex-wrap justify-center gap-6">
                        <div class="max-w-xs">
                            <img src="{{asset('imagens/image 5.png')}}" alt="Enem 2024" class="rounded-lg shadow-lg">
                            <p class="text-center mt-2">Enem 2024</p>
                        </div>
                        <div class="max-w-xs">
                            <img src="{{asset('imagens/image 7.png')}}" alt="Fuvest 2024" class="rounded-lg shadow-lg">
                            <p class="text-center mt-2">Fuvest 2024</p>
                        </div>
                        <div class="max-w-xs">
                            <img src="{{asset('imagens/image 8.png')}}" alt="Unesp 2024" class="rounded-lg shadow-lg">
                            <p class="text-center mt-2">Unesp 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Definição dos eventos
        let eventos2024 = {};

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

        document.getElementById('next-month-btn').addEventListener('click', () => {
            // Muda para o próximo mês
            currentMonthIndex = (currentMonthIndex + 1) % 12;
            if (currentMonthIndex === 0) currentYear++;
            updateCalendar(currentMonthIndex, currentYear);
        });

        document.getElementById('prev-month-btn').addEventListener('click', () => {
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
