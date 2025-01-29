<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Calculadora Windows Style</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col items-center justify-center p-6">
    <div class="w-[420px] bg-gray-800 rounded-xl shadow-lg p-4 space-y-4">
        <div class="flex items-center justify-between mb-2">
            <span class="font-bold text-xl">Padrão</span>
            <div class="text-sm opacity-75">
                <span class="cursor-pointer">🖿</span>
            </div>
        </div>
        <div class="bg-black text-right text-4xl p-5 rounded font-mono">
            {{ $displayValue }}
        </div>
        <div class="grid grid-cols-4 gap-3">
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="%"/><button class="bg-gray-700 py-3 w-full rounded hover:bg-gray-600">%</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="CE"/><button class="bg-gray-700 py-3 w-full rounded hover:bg-gray-600">CE</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="C"/><button class="bg-gray-700 py-3 w-full rounded hover:bg-gray-600">C</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="back"/><button class="bg-gray-700 py-3 w-full rounded hover:bg-gray-600">⌫</button></form>
        </div>
        <div class="grid grid-cols-4 gap-3">
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="1/x"/><button class="bg-gray-700 py-3 w-full rounded hover:bg-gray-600">1/x</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="x^2"/><button class="bg-gray-700 py-3 w-full rounded hover:bg-gray-600">x²</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="sqrt"/><button class="bg-gray-700 py-3 w-full rounded hover:bg-gray-600">√x</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="/"/><button class="bg-gray-700 py-3 w-full rounded hover:bg-gray-600">÷</button></form>
        </div>
        <div class="grid grid-cols-4 gap-3">
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="7"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">7</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="8"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">8</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="9"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">9</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="*"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">×</button></form>
        </div>
        <div class="grid grid-cols-4 gap-3">
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="4"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">4</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="5"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">5</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="6"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">6</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="-"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">-</button></form>
        </div>
        <div class="grid grid-cols-4 gap-3">
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="1"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">1</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="2"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">2</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="3"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">3</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="+"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">+</button></form>
        </div>
        <div class="grid grid-cols-4 gap-3">
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="±"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">±</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="0"/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">0</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="."/><button class="bg-gray-700 py-4 w-full rounded hover:bg-gray-600">,</button></form>
            <form method="POST" action="/calculadora">@csrf<input type="hidden" name="btn" value="="/><button class="bg-blue-600 py-4 w-full rounded hover:bg-blue-500">=</button></form>
        </div>
    </div>
    <div class="mt-4">
        <a href="/" class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-400 text-white">Voltar ao Menu</a>
    </div>
</body>
</html>
