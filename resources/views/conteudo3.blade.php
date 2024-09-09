<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray 100hv">

    
<main class="flex-1 flex flex-col">   
    <aside class="w-64 flex flex-col">
        @include('menuteste')
    </aside>
    <div class="container p-20 flex justify-center items-start">
        <div class="flex items-center">
            <button class="text-black text-3xl border-2 border-black rounded-full p-2"><</button>
            <span class="text-orange-500 text-3xl font-bold p-2">|</span>
            <h1 class="flex justify-start items-start text-3xl font-bold">Conteúdo</h1>
        </div>
    
    

        <div class=" h-3/5 w-3/5  p-12 rounded-xl ">
            <div class=" bg-black aspect-w-160 aspect-h-190">
                <div class=" rounded-xl flex justify-center items-center text-white text-6xl">
                    <video class="h-full w-full p-8" autoplay muted loop playsinline   src="">></video>
            </div>
     
        </div>
        <p class="text-start mt-2 text-gray-600">Matéria - Professor: fulano</p>
    </div>
</main>
</body>
</html>
