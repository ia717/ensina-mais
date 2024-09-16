<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="bg-gray-50 font-sans h-screen">

    <div class="h-full w-full">
        <!-- Menu lateral -->
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-lg transition-colors duration-300">
            @include('menuteste') <!-- Mantém o menu conforme solicitado -->
        </aside>

        <!-- Conteúdo principal centralizado -->
        <main class="flex-1 flex justify-center items-center transition-colors duration-300 ">

            <div class="w-full max-w-3xl p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
                <header class="flex items-center justify-between px-6 py-4  ">

                    <h1 class="text-3xl flex font-bold"><a href="#">
                            <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="mt-2 mr-3 hover:pl-1 transition-all " xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                    <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                                </g>
                            </svg>
                        </a>Calendário</h1>
                </header>
                <hr class="border-t border-gray-300 my-6">
                <!-- Filtro de eventos -->
                <div class="flex justify-start w-max mt-6">
                    <div class="flex space-x-2 justify-center">
                    <svg class=" absolute top-30 mt-2 left-96 ml-8 z-50" fill="#8c8c8c" width="25px" height="25px" fill="#9ca3af" viewBox="0 0 256.00098 256.00098" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#9ca3af" stroke-width="14.080053900000001"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M226.82129,221.17236,180.955,175.306a88.10138,88.10138,0,1,0-5.657,5.65649L221.165,226.82959a3.99992,3.99992,0,0,0,5.65625-5.65723ZM35.999,116a80,80,0,1,1,80,80A80.09041,80.09041,0,0,1,35.999,116Z"></path> </g></svg>
                        <input type="text" placeholder=" Pesquisar eventos" class="placeholder-gray-400 w-full pr-4 pl-8 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button for="eventFilter" class=" text-gray-600 dark:text-gray-100">Filtrar </button>
                    </div>

                </div>
                
                <!-- Calendário -->
                <div class="flex flex-col items-center mt-8">
                    <div class="flex items-center justify-between ">
                        <button id="prev-month" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                            <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class=" mt-1 hover:pl-1 transition-all " xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                    <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                                </g>
                            </svg>
                        </button>

                        <h2 id="month-year" class="text-gray-800 text-xl font-bold px-2">JANEIRO 2024</h2>
                        <button id="next-month" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                            <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class=" transform scale-x-[-1] mt-1 hover:pl-1 transition-all " xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                    <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="mt-4 ">
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
                        <div id="calendar-body" class="grid grid-cols-7 gap-6 mt-2">
                            <!-- Dias do mês serão gerados dinamicamente -->
                        </div>
                       
                    </div>
                
                                
                    <!-- Formulário de eventos -->
                    <div class="justify-center items-center mt-8">
                        <hr class="border-t border-gray-300 my-6">
                        <div class="justify-center items-center flex">
                            <h1 class="text-4xl font-bold text-[#646464]">Eventos</h1>
                        </div>

                        <div class="flex justify-center p-11 space-x-6">
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

                        <div class="flex justify-center items-center space-x-2 mt-4">
                            <input type="text" placeholder="Adicionar novo evento" class="p-2 border rounded-lg text-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                            
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Salvar evento</button>
                        </div>
                        <hr class="border-t border-gray-300 my-6">
                    </div>
                   
                    <!-- Sugestões de eventos -->
                    <div class="mt-10">
                        <h3 class="text-center text-xl font-semibold mb-4">Saiba +</h3>
                        <div class="flex justify-center gap-6">
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

</body>
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

</html>