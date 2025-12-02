@extends('layout.app')

@section('title', 'Novo Ganho')

@section('content')

<form action="{{ route('earnings.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow max-w-lg">
    @csrf

    <label class="block mb-2 font-semibold">Descrição</label>
    <input name="descricao" class="w-full p-2 border rounded mb-4" required>

    <label class="block mb-2 font-semibold">Valor (R$)</label>
    <input type="number" step="0.01" name="valor" class="w-full p-2 border rounded mb-4" required>

    <label class="block mb-2 font-semibold">Data</label>
    <input type="date" name="data" class="w-full p-2 border rounded mb-4" required>

    <label class="block mb-2 font-semibold">Categoria</label>
    <select name="category_id" class="w-full p-2 border rounded mb-4" required>
        @foreach ($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>

    <button class="w-full bg-green-600 text-white p-3 rounded hover:bg-green-700">
        Salvar
    </button>
</form>

@endsection
