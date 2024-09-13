@include('menuteste')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 ">

    <main class="max-w-7xl  mx-auto p-9 sm:p-6 md:p-8 ml-72  ">

            <a href="#">
                <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="absolute top-7 mt-3 left-72 hover:pl-1 transition-all ml-10" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                        <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                    </g>
                </svg>
            </a>
        <div class="flex items-center bg-white left-20 ">
                
            <span class="text-purple-400 text-3xl font-bold mb-2 ml-10">|</span>
            <h1 class="text-black text-4xl font-bold">Conteúdo</h1>
        </div>
        <div class="container p-10 flex flex-col justify-center items-start pl-20 bg-white">




            <div class="h-4/5 w-full lg:w-5/5 p-6 rounded-xl bg-black aspect-w-16 aspect-h-9 mb-8">
                <video class="h-full w-full p-4" autoplay muted loop playsinline src=""></video>
            </div>
            <p class="text-start mt-2 text-gray-600 mb-6">Matéria - Professor: Fulano</p>

            <div class="flex items-center mb-8">
                <span class="text-purple-400 text-3xl font-bold mb-4">|</span>
                <h2 class="text-3xl font-bold mb-4">Mapa Mental</h2>
            </div>
            <div class="h-3/5 w-full lg:w-4/5 mt-6 p-8 rounded-xl bg-white shadow-lg mb-10">
                <img class="h-full w-full rounded-xl" src="{{asset('imagens/mapamental.png')}}" alt="Mapa Mental">
            </div>

            <div class="flex items-center mb-8">
                <span class="text-purple-400 -500 text-3xl font-bold mb-7">|</span>
                <h2 class="text-3xl font-bold mb-6">Resumo</h2>
            </div>
            <div class="w-full lg:w-4/5 bg-white p-8 rounded-xl shadow-lg leading-relaxed text-gray-800">
                <p>As <strong>funções da linguagem</strong> representam diferentes propósitos que a comunicação pode ter em um diálogo, focando em aspectos específicos da interação.</p>

                <ol class="list-decimal list-inside mt-4 space-y-4">
                    <li>
                        <strong>Função Emotiva:</strong> Expressa emoções de maneira subjetiva, focada na 1ª pessoa. Aparece em textos poéticos e diários.
                        <em>Exemplo:</em> “Estou muito orgulhosa! Meu filho foi aprovado em uma universidade federal!” — o objetivo é compartilhar sentimentos.
                    </li>
                    <li>
                        <strong>Função Referencial:</strong> Foca na transmissão objetiva da informação, geralmente em 3ª pessoa, comum em materiais didáticos e textos científicos.
                        <em>Exemplo:</em> “Erro na correção de provas do Enem afeta cerca de 6 mil provas.” — o foco é informar o receptor sem envolvimento emocional.
                    </li>
                    <li>
                        <strong>Função Conativa:</strong> Procura convencer o receptor, usando linguagem imperativa, presente em propagandas e discursos políticos.
                        <em>Exemplo:</em> “Com o nosso curso online, seu desempenho no idioma terá uma melhora de 70% em três meses.” — o objetivo é influenciar e incentivar uma ação.
                    </li>
                    <li>
                        <strong>Função Fática:</strong> Mantém ou interrompe a comunicação, focando na interação entre emissor e receptor, comum em diálogos.
                        <em>Exemplo:</em> “Você sabe que já deveria ter terminado, não é mesmo?” — a prioridade é garantir a continuidade da conversa.
                    </li>
                    <li>
                        <strong>Função Metalinguística:</strong> Explica a própria linguagem, usando a metalinguagem.
                        <em>Exemplo:</em> “Uma mensagem é uma comunicação oral ou escrita.” — o propósito é esclarecer o significado de termos linguísticos.
                    </li>
                    <li>
                        <strong>Função Poética:</strong> Valoriza a forma da mensagem, usando linguagem figurada, encontrada em literatura e publicidade.
                        <em>Exemplo:</em> “No jardim da noite, flores de luar, sussurros de vento começam a dançar...” — o foco está na forma estética e no efeito emocional da expressão.
                    </li>
                </ol>

                <p class="mt-6"><strong>Conclusão:</strong> As funções da linguagem mostram como a comunicação pode servir a diferentes propósitos, desde informar e expressar emoções até persuadir, manter contato e explorar a beleza estética da língua.</p>
            </div>
        </div>
    </main>

</body>

</html>