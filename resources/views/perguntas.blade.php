<x-app-layout>
    <div class="items-center justify-center flex min-h-screen">
        <div class="bg-white dark:bg-neutral-800 rounded-lg shadow-lg p-6 max-w-4xl w-full justify-center items-center">
            <h2 class="text-2xl font-bold mb-4 text-center text-sky-800 dark:text-white">Perguntas Frequentes</h2>

            <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6">
                <!-- FAQ Container -->
                <div class="bg-gray-100 dark:bg-neutral-700 rounded-3xl p-6 md:w-1/2 z-50">
                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- Question 1 -->
                        <div tabindex="0" class="collapse collapse-arrow  rounded-md dark:border-neutral-600">
                            <input type="checkbox" />
                            <div class="collapse-title text-gray-800 dark:text-white font-semibold">
                                O que fazer se o site estiver fora do ar ou lento?
                            </div>
                            <div class="collapse-content text-gray-600 dark:text-gray-300">
                                Se o site estiver fora do ar ou lento, verifique sua conexão com a internet e tente novamente mais tarde.
                            </div>
                            <div class="divider m-0 "></div>
                        </div>
                        <!-- Question 2 -->
                        <div tabindex="0" class="collapse collapse-arrow  rounded-md dark:border-neutral-600">
                            <input type="checkbox" />
                            <div class="collapse-title text-gray-800 dark:text-white font-semibold">
                                Posso personalizar meu plano de estudos no site?
                            </div>
                            <div class="collapse-content text-gray-600 dark:text-gray-300">
                                Sim, o site permite a personalização do seu plano de estudos de acordo com suas necessidades.
                            </div>
                            <div class="divider m-0"></div>
                        </div>
                        <!-- Question 3 -->
                        <div tabindex="0" class="collapse collapse-arrow  rounded-md dark:border-neutral-600">
                            <input type="checkbox" />
                            <div class="collapse-title text-gray-800 dark:text-white font-semibold">
                                O site oferece conteúdo para todos os níveis de aprendizado?
                            </div>
                            <div class="collapse-content text-gray-600 dark:text-gray-300">
                                Sim, o site oferece conteúdos que abrangem desde o nível iniciante até o avançado.
                            </div>
                            <div class="divider m-0"></div>
                        </div>
                        <!-- Question 4 -->
                        <div tabindex="0" class="collapse collapse-arrow  rounded-md dark:border-neutral-600">
                            <input type="checkbox" />
                            <div class="collapse-title text-gray-800 dark:text-white font-semibold">
                                O site prepara para exames internacionais?
                            </div>
                            <div class="collapse-content text-gray-600 dark:text-gray-300">
                                Sim, oferecemos cursos específicos para preparação de exames internacionais como TOEFL, IELTS, etc.
                            </div>
                            <div class="divider m-0"></div>
                        </div>
                        <!-- Question 5 -->
                        <div tabindex="0" class="collapse collapse-arrow  rounded-md dark:border-neutral-600">
                            <input type="checkbox" />
                            <div class="collapse-title text-gray-800 dark:text-white font-semibold">
                                Posso estimar o tempo do meu aprendizado?
                            </div>
                            <div class="collapse-content text-gray-600 dark:text-gray-300">
                                Sim, com base no seu ritmo de estudo e no plano escolhido, é possível estimar o tempo necessário.
                            </div>
                            <div class="divider m-0"></div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form Container -->
                <div class="bg-gray-50 dark:bg-neutral-700 rounded-lg p-6 md:w-1/2">
                    <h3 class="text-lg font-bold mb-4 text-sky-800 dark:text-white">Fale Conosco</h3>
                    <form>
                        <input type="text" placeholder="Seu Nome" class="block w-full mb-3 px-4 py-2 border border-gray-300 rounded-full bg-white dark:bg-neutral-600 dark:text-white" />
                        <input type="email" placeholder="Seu Email" class="block w-full mb-3 px-4 py-2 border border-gray-300 rounded-full bg-white dark:bg-neutral-600 dark:text-white" />
                        <textarea placeholder="Digite aqui..." class="block w-full mb-3 px-4 py-2 border border-gray-300 rounded-full bg-white dark:bg-neutral-600 dark:text-white"></textarea>
                        <button type="submit" class="bg-sky-800 hover:bg-blue-500 transition-all duration-100 font-bold text-white px-4 py-2 rounded-full w-full dark:bg-sky-600 dark:hover:bg-blue-500">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>