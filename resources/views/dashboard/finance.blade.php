<h2 class="text-2xl font-bold">Resumo Financeiro</h2>

<form method="GET" class="my-4">
    <select name="month">
        @for ($m = 1; $m <= 12; $m++)
            <option value="{{ $m }}" {{ $m == $month ? 'selected' : '' }}>
                {{ DateTime::createFromFormat('!m', $m)->format('F') }}
            </option>
        @endfor
    </select>

    <select name="year">
        @for ($y = now()->year - 5; $y <= now()->year + 1; $y++)
            <option value="{{ $y }}" {{ $y == $year ? 'selected' : '' }}>
                {{ $y }}
            </option>
        @endfor
    </select>

    <button class="px-4 py-2 bg-blue-500 text-white rounded">Filtrar</button>
</form>

<div class="bg-white p-4 rounded shadow">
    <p><strong>Receitas:</strong> R$ {{ number_format($earnings, 2, ',', '.') }}</p>
    <p><strong>Gastos:</strong> R$ {{ number_format($expenses, 2, ',', '.') }}</p>
    <p><strong>Saldo:</strong> 
        <span class="{{ $balance >= 0 ? 'text-green-600' : 'text-red-600' }}">
            R$ {{ number_format($balance, 2, ',', '.') }}
        </span>
    </p>
</div>
