<x-app-layout>
    <!-- Main content -->
<main class="flex-1 p-10 bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-xl mx-auto">
        <h1 class="text-center text-2xl font-bold mb-8">Editar perfil</h1>
        
        <div class="flex justify-center mb-6">
            <div class="bg-gray-300 rounded-full h-24 w-24"></div>
        </div>
        
        <div class="flex justify-center mb-4">
            <label class="mr-4 flex items-center space-x-2"><input type="radio" name="role" value="aluno" checked class="mr-2"> <span>ALUNO</span></label>
            <label class="flex items-center space-x-2"><input type="radio" name="role" value="educador" class="mr-2"> <span>EDUCADOR</span></label>
        </div>
        
        <form action="#" method="POST">
            <div class="space-y-4">
                <input type="text" placeholder="Nome completo" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <div class="flex space-x-4">
                    <input type="email" placeholder="Email" class="w-1/2 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <input type="text" placeholder="Telefone" class="w-1/2 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="flex space-x-4">
                    <input type="password" placeholder="Senha" class="w-1/2 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <input type="password" placeholder="Confirme a senha" class="w-1/2 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="flex space-x-4">
                    <select class="w-1/2 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option>Estado</option>
                        <option>São Paulo</option>
                        <option>Rio de Janeiro</option>
                        <!-- Adicione outros estados aqui -->
                    </select>
                    <input type="text" placeholder="Cidade" class="w-1/2 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="flex space-x-4">
                    <input type="text" placeholder="Escolaridade" class="w-1/2 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <input type="text" placeholder="Escola" class="w-1/2 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <input type="text" placeholder="Curso preferido" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit" class="w-full mt-6 bg-green-500 text-white p-3 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Salvar dados</button>
        </form>
    </div>
</main>

</x-app-layout> 