<x-app-layout>
    <div class="rounded-md bg-white dark:bg-neutral-800 p-6 space-y-8">
    <main class="items-center justify-center flex min-h-screen">
       <div class="bg-white dark:bg-neutral-800 rounded-lg p-6 max-w-4xl w-full justify-center items-center">
                    <h2 class="text-2xl font-bold mb-4 text-center text-sky-800 dark:text-white">Perguntas Frequentes</h2>

                    <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6">
                        <!-- FAQ Container -->
                        <div class="flex-col bg-gray-500 rounded-md">
                            <details class="mb-4 bg-gray-600  rounded-lg p-4">
                                <summary class="cursor-pointer text-lg font-medium">O que fazer se o site estiver fora do ar ou lento?</summary>
                                <p class="mt-2 text-gray-400">Verifique a Conexão: Certifique-se de que sua conexão com a internet está estável <br>
                                    Limpe o Cache do Navegador: Às vezes, dados armazenados em cache podem causar problemas de carregamento. <br>
                                    Contate o Suporte: Se o problema continuar, entre em contato com o suporte do site
                                </p>
                            </details>
                            <details class="mb-4 bg-gray-600  rounded-lg p-4">
                                <summary class="cursor-pointer text-lg font-medium">Posso personalizar meu plano de estudos no site?</summary>
                                <p class="mt-2 text-gray-00">Sim, você pode personalizar seu plano de estudos! O site oferece ferramentas que permitem <br>
                                    adaptar o plano às suas necessidades, ajustando o conteúdo, o tempo de estudo e as metas de acordo com seus objetivos pessoais. <br>
                                    Isso facilita o acompanhamento do progresso e ajuda a manter o foco nas áreas mais importantes para você.
                                </p>
                            </details>
                            <details class="mb-4 bg-gray-600  rounded-lg p-4">
                                <summary class="cursor-pointer text-lg font-medium">O site oferece conteúdo para todos os níveis de aprendizado?</summary>
                                <p class="mt-2 text-gray-400">Sim, o site oferece conteúdo para todos os níveis de aprendizado! Há materiais disponíveis desde o nível <br>
                                    iniciante até o avançado, cobrindo diferentes temas e habilidades. <br>
                                    Assim, você pode evoluir no seu próprio ritmo, acessando recursos adaptados ao seu conhecimento atual e aos seus objetivos de aprendizado.
                                </p>
                            </details>
                            <details class="mb-4 bg-gray-600 rounded-lg p-4">
                                <summary class="cursor-pointer text-lg font-medium">Como faço para alterar as minhas informações pessoais?</summary>
                                <p class="mt-2 text-gray-400">VPara alterar suas informações pessoais, acesse a seção de configurações ou perfil do site, onde você encontrará uma opção para editar dados como nome, e-mail e outras informações pessoais. <br>
                                    Caso precise de ajuda, consulte o suporte ou a central de ajuda do site para obter orientações detalhadas.
                                </p>
                            </details>
                            <details class="mb-4 bg-gray-600  rounded-lg p-4">
                                <summary class="cursor-pointer text-lg font-medium">Posso estimar o tempo do meu aprendizado?</summary>
                                <p class="mt-2 text-gray-400">Sim, o site permite estimar o tempo de aprendizado com base no seu plano de estudos e nas metas definidas. <br>
                                    Através de ferramentas que monitoram seu progresso e o tempo investido, você consegue ter uma ideia aproximada de quanto tempo será necessário para atingir seus objetivos. <br>
                                    Isso ajuda a planejar melhor o ritmo dos estudos e manter o foco.
                                </p>
                            </details>
                        </div>
                        <!-- Contact Form Container -->
                        <div class="bg-gray-50 dark:bg-neutral-700 rounded-lg p-6 md:w-1/2">
                            <h3 class="text-lg font-bold mb-4 text-sky-800 dark:text-white">Fale Conosco</h3>
                            <form>
                                <input type="text" placeholder="Seu Nome" class="block w-full mb-3 px-4 py-2 border border-gray-300 rounded-full bg-white dark:bg-neutral-600 dark:text-white" />
                                <input type="email" placeholder="Seu Email" class="block w-full mb-3 px-4 py-2 border border-gray-300 rounded-full bg-white dark:bg-neutral-600 dark:text-white" />
                                <textarea placeholder="Digite aqui..." class="block w-full h-1/2 mb-3 px-4 py-2 border border-gray-300  bg-white dark:bg-neutral-600 dark:text-white"></textarea>
                                <button type="submit" class="bg-sky-800 hover:bg-blue-500 transition-all duration-100 font-bold text-white px-4 py-2 rounded-full w-full dark:bg-sky-600 dark:hover:bg-blue-500">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
    </main>
    </div>
</x-app-layout>