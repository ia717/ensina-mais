<x-app-layout>
    <!-- Conteúdo Principal -->
    <div id="main-content" class="flex-1 p-10 bg-gray-50 text-black transition-all duration-300 ml-12">
        <h1 class="text-3xl font-bold mb-4">Bem-vindo ao Conteúdo Principal</h1>
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum. Sed nec ex at nunc fermentum congue.</p>
        <p class="mb-4">Praesent condimentum nunc nec felis tempor, non cursus nisl dignissim. Curabitur in libero et orci euismod dignissim a vel lorem.</p>
        <p class="mb-4">Aenean scelerisque tellus vitae lacus varius, at pretium erat venenatis. Fusce eget quam at elit bibendum sodales et in libero.</p>
    </div>

 <script>
        const checkbox = document.getElementById('checkbox');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const bars = document.querySelectorAll('.bars');

        checkbox.addEventListener('change', function () {
            sidebar.classList.toggle('-translate-x-64');
            mainContent.classList.toggle('ml-64');
            bars.forEach(bar => bar.classList.toggle('open'));
        });
 </script>
 


</x-app-layout>