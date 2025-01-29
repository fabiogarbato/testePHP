<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Minha Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Hello Word!</h1>
        
        <p class="mb-4">
            Aqui podemos ter algum texto de boas-vindas.
        </p>

        <div class="space-x-4">
            <a href="/calculadora" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                Calculadora
            </a>

            <a href="/projeto2" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">
                Projeto 2
            </a>

            <a href="/projeto3" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500 transition">
                Projeto 3
            </a>
        </div>
    </div>
</body>
</html>
