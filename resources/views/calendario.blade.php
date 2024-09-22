<x-app-layout>
  <div class=" font-sans  min-h-screen flex flex-col">
    <div class="flex flex-1">
      <!-- Main Content Centered -->
      <div class="flex-1 flex flex-col justify-center items-center p-4 lg:p-6 ">
        <div class="w-full max-w-3xl shadow-md rounded-lg p-6 bg-white dark:bg-neutral-800">
          <header class="flex items-center">
            <button class="text-gray-500 hover:text-gray-800 focus:outline-none">
              <i class="fas fa-chevron-left"></i>
            </button>
            <h1 class="text-3xl font-bold mx-4 text-black dark:text-white">Calendário</h1>
          </header>
          <hr class="border-t border-gray-300 my-6">
          <!-- Calendar -->
          <div class="flex flex-col items-center mt-8 px-4">
            <div class="flex items-center justify-between w-full max-w-md">
              <!-- Calendar Navigation Buttons -->
              <button id="prev-month-btn" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                <i class="fas fa-chevron-left"></i>
              </button>
              <h2 id="month-year" class="text-gray-800  dark:text-white text-xl font-bold px-2 ">JANEIRO 2024</h2>
              <button id="next-month-btn" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
            <div class="mt-4 w-full">
              <!-- Calendar Days Header -->
              <div id="calendar-days" class="grid grid-cols-7 sm:grid-cols-7 gap-1 mt-2 text-center text-gray-400 text-xs sm:text-base">
                <div>D</div>
                <div>S</div>
                <div>T</div>
                <div>Q</div>
                <div>Q</div>
                <div>S</div>
                <div>S</div>
              </div>
              <!-- Calendar Body -->
              <div id="calendar-body" class="grid grid-cols-7 sm:grid-cols-7 gap-2 sm:gap-6 mt-2 text-center">
                <!-- Days of the month will be populated here -->
              </div>
            </div>
          </div>
          <!-- Event Form -->
          <div class="flex flex-col items-center mt-8">
            <hr class="border-t border-gray-300 my-6">
            <div class="flex flex-col items-center">
              <h1 class="text-2xl sm:text-4xl font-bold text-black dark:text-white">Eventos</h1>
            </div>
            <div class="flex flex-wrap justify-center items-center space-x-0 sm:space-x-4 mt-4">
              <div class="flex items-center space-x-2 sm:space-x-4">
                <div class="w-16 h-8 sm:w-20 sm:h-10 text-white bg-[#EB07FF] flex items-center justify-center rounded-lg">
                  <p class="text-center text-sm sm:text-base text-white">20/09</p>
                </div>
                <p class="self-center text-sm sm:text-base text-black dark:text-white">Simulado</p>
              </div>
              <div class="flex items-center space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                <div class="w-16 h-8 sm:w-20 sm:h-10 bg-[#3A89FF] text-white flex items-center justify-center rounded-lg">
                  <p class="text-center text-sm sm:text-base text-white">20/09</p>
                </div>
                <p class="self-center text-sm sm:text-base text-black dark:text-white">Simulado</p>
              </div>
              <div class="flex items-center space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                <div class="w-16 h-8 sm:w-20 sm:h-10 bg-[#129F75] text-white flex items-center justify-center rounded-lg">
                  <p class="text-center text-sm sm:text-base text-white">20/09</p>
                </div>
                <p class="self-center text-sm sm:text-base text-black dark:text-white">Simulado</p>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row justify-center items-center space-x-0 sm:space-x-2 mt-4">
              <input type="text" placeholder="Adicionar novo evento" class="p-2 border rounded-lg text-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-gray-300 w-full sm:w-auto">
              <button class="px-4 py-2 bg-blue-500 dark:text-white rounded-lg mt-2 sm:mt-0 text-black">Salvar evento</button>
            </div>
            <hr class="border-t border-gray-300 my-6">
          </div>
          <!-- Event Suggestions -->
          <div class="mt-8 flex flex-col">
            <h3 class="text-center text-xl font-semibold mb-4 text-black dark:text-white">Saiba +</h3>
            <div class="flex flex-wrap justify-center gap-6">
              <div class="w-full sm:max-w-xs">
                <img src="{{asset('imagens/image 5.png')}}" alt="Enem 2024" class="rounded-lg shadow-lg w-full">
                <p class="text-center mt-2 text-black dark:text-white">Enem 2024</p>
              </div>
              <div class="w-full sm:max-w-xs">
                <img src="{{asset('imagens/image 7.png')}}" alt="Fuvest 2024" class="rounded-lg shadow-lg w-full">
                <p class="text-center mt-2 text-black dark:text-white">Fuvest 2024</p>
              </div>
              <div class="w-full sm:max-w-xs">
                <img src="{{asset('imagens/image 8.png')}}" alt="Unesp 2024" class="rounded-lg shadow-lg w-full">
                <p class="text-center mt-2 text-black dark:text-white">Unesp 2024</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Event Definitions
    let eventos2024 = {};

    const daysInMonth = (month, year) => {
      return new Date(year, month + 1, 0).getDate();
    };

    const getFirstDayOfMonth = (month, year) => {
      return new Date(year, month, 1).getDay();
    };

    let currentMonthIndex = new Date().getMonth();
    let currentYear = new Date().getFullYear();
    const monthNames = ['JANEIRO', 'FEVEREIRO', 'MARÇO', 'ABRIL', 'MAIO', 'JUNHO', 'JULHO', 'AGOSTO', 'SETEMBRO', 'OUTUBRO', 'NOVEMBRO', 'DEZEMBRO'];
    const monthYearElement = document.getElementById('month-year');
    const calendarBodyElement = document.getElementById('calendar-body');
    const calendarDaysElement = document.getElementById('calendar-days');

    function updateCalendar(monthIndex, year) {
      const monthName = monthNames[monthIndex];
      const days = daysInMonth(monthIndex, year);
      const firstDay = getFirstDayOfMonth(monthIndex, year);

      // Update month and year name
      monthYearElement.textContent = `${monthName} ${year}`;

      // Generate calendar days header if empty
      if (!calendarDaysElement.hasChildNodes()) {
        const daysOfWeek = ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'];
        daysOfWeek.forEach(day => {
          const dayElement = document.createElement('div');
          dayElement.textContent = day;
          calendarDaysElement.appendChild(dayElement);
        });
      }

      // Generate days of the month with the correct weekday
      calendarBodyElement.innerHTML = '';
      for (let i = 0; i < firstDay; i++) {
        const emptyCell = document.createElement('div');
        calendarBodyElement.appendChild(emptyCell);
      }
      for (let day = 1; day <= days; day++) {
        const dateKey = `${year}-${String(monthIndex + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        const eventClass = eventos2024[dateKey] || 'bg-gray-200 text-gray-800';
        const dayElement = document.createElement('div');
        dayElement.className = `day text-center cursor-pointer p-2 rounded-lg ${eventClass}`;
        dayElement.textContent = day;
        calendarBodyElement.appendChild(dayElement);
      }
    }

    document.getElementById('next-month-btn').addEventListener('click', () => {
      // Move to next month
      currentMonthIndex = (currentMonthIndex + 1) % 12;
      if (currentMonthIndex === 0) currentYear++;
      updateCalendar(currentMonthIndex, currentYear);
    });

    document.getElementById('prev-month-btn').addEventListener('click', () => {
      // Move to previous month
      currentMonthIndex = (currentMonthIndex - 1 + 12) % 12;
      if (currentMonthIndex === 11) currentYear--;
      updateCalendar(currentMonthIndex, currentYear);
    });

    // Initialize the calendar with the current month
    updateCalendar(currentMonthIndex, currentYear);
  </script>
</x-app-layout>
