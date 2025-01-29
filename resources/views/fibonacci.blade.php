<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Fibonacci</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-6">
    <div class="w-[600px] bg-gray-800 rounded-xl shadow-2xl p-8 text-center">
        <h1 class="text-3xl font-extrabold mb-4">Sequência de Fibonacci</h1>
        <p class="text-gray-300 text-lg mb-6">Digite quantos termos deseja gerar.</p>
        <form action="/fibonacci" method="POST" class="space-y-4">
            @csrf
            <div>
                <input type="number" name="n"
                    class="w-32 text-center py-2 px-3 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Ex: 10" min="1" required>
            </div>
            <div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-500 px-5 py-2 rounded transition font-semibold">
                    Gerar
                </button>
            </div>
        </form>

        @if(isset($sequence))
            <div class="mt-8 bg-gray-700 p-4 rounded text-left">
                <h2 class="font-bold text-xl mb-3">
                    Sequência ({{ $n }} termos):
                </h2>
                <div
                    class="w-full max-h-64 overflow-y-auto p-2 bg-gray-600 rounded scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-600">
                    <div class="flex flex-col flex-wrap gap-3 h-[200px]"> <!-- Coluna flexível com altura fixa -->
                        @foreach($sequence as $term)
                            <span class="bg-gray-900 px-3 py-1 rounded text-sm font-semibold whitespace-nowrap w-fit">
                                {{ $term }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <div class="mt-6">
            <a href="/" class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-400 text-white">
                Voltar ao Menu
            </a>
        </div>
    </div>
</body>

</html>