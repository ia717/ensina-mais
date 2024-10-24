<x-app-layout> 

<main class="flex space-x-2 " >
<div class="bg-gray-100 p-7 rounded-lg  w-1/2 max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Provas do ENEM</h1>

    <!-- Primeira linha de PDFs -->
    <div class="flex flex-col md:flex-row justify-around items-center mb-6">
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">ENEM 2023</p>
            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2023 - 1o Dia - AMARELO.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR PDF
            </a>
        </div>
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">ENEM 2023 Gabarito</p>
            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2023 - 1o Dia - AMARELO - Gabarito.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR Gabarito
            </a>
        </div>
    </div>

   
    <div class="flex flex-col md:flex-row justify-around items-center mb-6">
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">ENEM 2022</p>
            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2022 - 1o Dia - AMARELO.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR PDF
            </a>
        </div>
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">ENEM 2022 Gabarito</p>
            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2022 - 1o Dia - AMARELO - Gabarito.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR Gabarito
            </a>
        </div>
    </div>

 
    <div class="flex flex-col md:flex-row justify-around items-center">
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">ENEM 2021</p>
            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2021 - 1o Dia - AMARELO.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR PDF
            </a>
        </div>
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">ENEM 2021 Gabarito</p>
            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2021 - 1o Dia - AMARELO - Gabarito.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR Gabarito
            </a>
        </div>
    </div>
</div>
<div class="bg-gray-100  p-8 rounded-lg w-1/2 max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Provas do FUVEST</h1>

    <!-- Primeira linha de PDFs -->
    <div class="flex flex-col md:flex-row justify-around items-center mb-6">
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">FUVEST 2024</p>
            <a href="{{ asset('pdfs/FUVEST/2024/2ª Fase - 1º Dia - FUVEST 2024.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR PDF
            </a>
        </div>
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">FUVEST 2024 Gabarito</p>
            <a href="{{ asset('pdfs/FUVEST/2024/FUVEST 2024 - 1 FASE aplicad em 19-11-23 GABARITO.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR Gabarito
            </a>
        </div>
    </div>

   
    <div class="flex flex-col md:flex-row justify-around items-center mb-6">
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">FUVEST 2023</p>
            <a href="{{ asset('pdfs/FUVEST/2023/fuv2023_prova_V.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR PDF
            </a>
        </div>
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">FUVEST 2023 Gabarito</p>
            <a href="{{ asset('pdfs/FUVEST/2023/fuv2023_gabarito_primeira_fase.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR Gabarito
            </a>
        </div>
    </div>

 
    <div class="flex flex-col md:flex-row justify-around items-center">
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">FUVEST 2022</p>
            <a href="{{ asset('pdfs/FUVEST/2022/Vestibular/fuvest_2022_primeira_fase_tipo_V.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR PDF
            </a>
        </div>
        <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
            <p class="mb-2">FUVEST 2022 Gabarito</p>
            <a href="{{ asset('pdfs/ENEM/2023/Vestibular/fuvest_2022_primeira_fase_gabarito.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                ABRIR Gabarito
            </a>
        </div>
    </div>
</div>

</main>
<aside class="flex space-x-2 ">
    <div class="bg-gray-100 p-8 rounded-lg  mt-3  w-1/2 max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Provas do FATEC</h1>

        <!-- Primeira linha de PDFs -->
        <div class="flex flex-col md:flex-row justify-around items-center mb-6">
            <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                <p class="mb-2">FATEC 2022</p>
                <a href="{{ asset('pdfs/FATEC/2022/FATEC 2022-2 aplicada em 17-07-22.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                    ABRIR PDF
                </a>
            </div>
            <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                <p class="mb-2">FATEC 2022 Gabarito</p>
                <a href="{{ asset('pdfs/FATEC/2022/FATEC 2022-2 aplicada em 17-07-22 GABARITO.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                    ABRIR Gabarito
                </a>
            </div>
        </div>

    
        <div class="flex flex-col md:flex-row justify-around items-center mb-6">
            <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                <p class="mb-2">FATEC 2023</p>
                <a href="{{ asset('pdfs/FATEC/2023/FATEC 2023-1 aplicada em 08-01-22.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                    ABRIR PDF
                </a>
            </div>
            <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                <p class="mb-2">FATEC 2023 Gabarito</p>
                <a href="{{ asset('pdfs/FATEC/2023/FATEC 2023-1 aplicada em 08-01-22 GABARITO.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                    ABRIR Gabarito
                </a>
            </div>
        </div>
    </div>  
    <div class="bg-gray-100 p-8 rounded-lg mt-3  w-1/2 max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Provas do UNESP</h1>

        <!-- Primeira linha de PDFs -->
        <div class="flex flex-col md:flex-row justify-around items-center mb-6">
            <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                <p class="mb-2">UNESP 2024</p>
                <a href="{{ asset('pdfs/UNESP/2024/Caderno de Questões - UNESP - 1ª Fase.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                    ABRIR PDF
                </a>
            </div>
            <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                <p class="mb-2">UNESP 2024 Gabarito</p>
                <a href="{{ asset('pdfs/UNESP/2024/Gabarito - UNESP 1a Fase.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                    ABRIR Gabarito
                </a>
            </div>
        </div>

    
        <div class="flex flex-col md:flex-row justify-around items-center mb-6">
            <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                <p class="mb-2">UNESP 2023</p>
                <a href="{{ asset('pdfs/UNESP/2023/1ª Fase - Unesp 2023.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                    ABRIR PDF
                </a>
            </div>
            <div class="bg-white text-black font-semibold text-lg flex justify-center items-center flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                <p class="mb-2">UNESP 2023 Gabarito</p>
                <a href="{{ asset('pdfs/UNESP/2023/1ª Fase - Unesp 2023 - Gabarito.pdf') }}" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                    ABRIR Gabarito
                </a>
            </div>
        </div>
    </div>  
</aside>
    
    
    
    
</x-app-layout> 