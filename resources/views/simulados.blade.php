<x-app-layout>


<main class="rounded-md  dark:bg-neutral-800 p-6 space-y-8">
    
    

<div class="flex items-center justify-end  bg-white   rounded-full px-4 py-2 w-full max-w-md">
           
           <input 
             type="text" 
             placeholder="Pesquisar provas" 
             class="w-full  text-gray-700 px-2 border-none bg-transparent"
           />
  
   </div>
        <aside class="flex-col bg-white text-start  rounded-md ">
            <h1 class="text-3xl font-bold mb-8 text-start text-gray-800">Provas Anteriores-ENEM</h1>
             <div class=" rounded-lg flex w-full text-start md:w-50   mx-auto">
                

                <!-- Primeira linha de PDFs -->
                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg text-start flex justify-start items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                        <p class="mb-2 text-start">ENEM 2023</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2023 - 1o Dia - AMARELO.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2023 - 1o Dia - AMARELO - Gabarito.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>
                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">ENEM 2021</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2021 - 1o Dia - AMARELO.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/ENEM/2023/ENEM 2021 - 1o Dia - AMARELO - Gabarito.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                 <!-- Primeira linha de PDFs -->
                 <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">ENEM 2019</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/ENEM/ENEM_2019_D1.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/ENEM/ENEM_2019_D1 (Gabarito).pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>


               

                
            </div>
            <div class=" rounded-lg flex w-full  mx-auto">
            <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">ENEM 2022</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/ENEM/2022/ENEM 2022 - 1o Dia - AMARELO.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/ENEM/2022/ENEM 2022 - 1o Dia - AMARELO - Gabarito.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">ENEM 2020</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/ENEM/- Enem Impresso - Dia 1 - 2020 - Caderno de Questões.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/ENEM/- Enem Impresso - Dia 1 - 2020 - Gabarito.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>


                

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">ENEM 2018</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/ENEM/ENEM_2018_1D.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/ENEM/ENEM_2018_1D (Gabarito).pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>
            </div>

            <div class="text-end">
                <button class="text-end">Ver mais</button>
            </div>
        </aside>
      
        <aside class="flex-col bg-white text-start rounded-md ">
        <h1 class="text-3xl font-bold mb-8 text-start text-gray-800">Provas Anteriores-FUVEST</h1>
            <div class=" rounded-lg flex w-full  mx-auto">
                

                <!-- Primeira linha de PDFs -->
                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FUVEST-2024</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FUVEST/2024/FUVEST 2024 - 1 FASE aplicad em 19-11-23.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FUVEST/2024/FUVEST 2024 - 1 FASE aplicad em 19-11-23 GABARITO.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>


                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FUVEST-2022</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FUVEST/2022/Vestibular/fuvest_2022_primeira_fase_tipo_V.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FUVEST/2022/Vestibular/fuvest_2022_primeira_fase_gabarito.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FUVEST-2020</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FUVEST/FUVEST_2020_1F.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FUVEST/FUVEST_2020_1F (Gabarito).pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>
            </div>
            <div class=" rounded-lg flex w-full  mx-auto">
                

                <!-- Primeira linha de PDFs -->
                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FUVEST-2023</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FUVEST/2023/fuv2023_prova_V.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FUVEST/2023/fuv2023_gabarito_primeira_fase.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>


                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FUVEST-2021</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FUVEST/FUVEST 2021 - 1 FASE aplicada eme 10-01-21.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FUVEST/FUVEST 2021 - 1 FASE aplicada eme 10-01-21 GABARITOS.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FUVEST-2019</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FUVEST/FUVEST_2019_1F.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FUVEST/FUVEST_2019_1F (Gabarito).pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>
            </div>
            <div class="text-end">
                <button class="text-end">Ver mais</button>
            </div>
        </aside>
        <aside class="flex-col bg-white text-start rounded-md ">
        <h1 class="text-3xl font-bold mb-8 text-start text-gray-800">Provas Anteriores-FATEC</h1>
            <div class=" rounded-lg flex w-full  mx-auto">
                
            <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FATEC 2024</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FATEC/prova-fatec-vestibular-2024-2.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FATEC/gabarito-fatec-vestibular-2024-2.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>


                <!-- Primeira linha de PDFs -->
                
                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FATEC 2022</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FATEC/2022/FATEC 2022-2 aplicada em 17-07-22.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FATEC/2022/FATEC 2022-2 aplicada em 17-07-22 GABARITO.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

               

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FATEC 2019</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FATEC/prova_fatec2019.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FATEC/Gabarito retificado2019.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>
            </div>
            <div class=" rounded-lg flex w-full  mx-auto">
                

           
                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FATEC 2023</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FATEC/2023/Vestibular de Verão/FATEC 2023-1 aplicada em 08-01-22.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FATEC/2023/Vestibular de Verão/FATEC 2023-1 aplicada em 08-01-22 GABARITO.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FATEC 2020</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FATEC/Prova2020.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FATEC/GABARITO oficial da prova (retificado)2020.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">FATEC 2018</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/FATEC/Provas Fatecs 2018.1.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/FATEC/Gabarito Retificado2018.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>
            </div>
            <div class="text-end">
                <button class="text-end">Ver mais</button>
            </div>
        </aside>
        <aside class="flex-col bg-white text-start rounded-md ">
        <h1 class="text-3xl font-bold mb-8 text-start text-gray-800">Provas Anteriores-UNESP</h1>
            <div class=" rounded-lg flex w-full  mx-auto">
                

                <!-- Primeira linha de PDFs -->
                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">UNESP 2024</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/UNESP/2024/Caderno de Questões - UNESP - 1ª Fase.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/UNESP/2024/Gabarito - UNESP 1a Fase.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>


                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">UNESP 2022</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/UNESP/provafase1_exatashumanas.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/UNESP/provafase1_exatashumanas_gabarito.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">UNESP 2020</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/UNESP/unesp_caderno_de_questoes_prova_de_conhecimentos_gerais_15_nov_2019__v1.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/UNESP/unesp_gabarito_prova_de_conhecimentos_gerais_15_nov_2019__v1.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>
            </div>
            <div class=" rounded-lg flex w-full  mx-auto">
                

                <!-- Primeira linha de PDFs -->
                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">UNESP 2023</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/UNESP/2023/1ª Fase - Unesp 2023.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/UNESP/2023/1ª Fase - Unesp 2023 - Gabarito.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">UNESP 2021</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/UNESP/caderno_2afase_unesp2021_versao_1.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/UNESP/gabarito_2afase_unesp2021_versao1.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start mb-6">
                    <div class="bg-gray-300 text-black font-semibold text-lg flex justify-center items-start flex-col p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-4">
                    <p class="mb-2 text-start">UNESP 2019</p>
                       <div class="flex space-x-1"> 
                            <a href="{{ asset('pdfs/UNESP/caderno-cg-1a-fase-versao-1-2019.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR PDF
                            </a>          
                            <a href="{{ asset('pdfs/UNESP/gabarito-cg-1a-fase-versao-1-2019.pdf') }}" target="_blank" class="text-white bg-[#2D6796] hover:bg-blue-700 py-2 px-4 rounded-lg transition-colors">
                                ABRIR Gabarito
                            </a>
                        </div>
                    
                    </div>
                   
                </div>
            </div>
            <div class="text-end">
                <button class="text-end">Ver mais</button>
            </div>
        </aside>
    </main>
</x-app-layout>