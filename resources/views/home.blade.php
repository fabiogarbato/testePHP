<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Minha Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-6">
    <div class="w-[600px] bg-gray-800 rounded-xl shadow-2xl p-8 text-center">
        <h1 class="text-4xl font-extrabold mb-4">Bem Vindo!</h1>
        <p class="text-gray-300 text-lg">
            Confira alguns projetos.
        </p>
        <div class="flex justify-center space-x-4 mt-8">
            <a href="/calculadora" class="bg-blue-600 hover:bg-blue-500 px-5 py-2 rounded transition font-semibold">
                Calculadora
            </a>
            <a href="/fibonacci" class="bg-green-600 hover:bg-green-500 px-5 py-2 rounded transition font-semibold">
                Fibonacci
            </a>
            <a href="/projeto3" class="bg-red-600 hover:bg-red-500 px-5 py-2 rounded transition font-semibold">
                Projeto 3
            </a>
        </div>
    </div>
</body>
</html>
