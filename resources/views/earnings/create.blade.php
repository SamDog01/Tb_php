@extends('layout.app')

@section('title', 'Novo Ganho')

@section('content')
<form action="/ganhos" method="POST" class="bg-white p-6 rounded-lg shadow max-w-lg">
    @csrf

    <label class="block mb-2">Descrição</label>
    <input name="descricao" class="w-full p-2 border rounded mb-4">

    <label class="block mb-2">Valor (R$)</label>
    <input type="number" step="0.01" name="valor" class="w-full p-2 border rounded mb-4">

    <label class="block mb-2">Data</label>
    <input type="date" name="data" class="w-full p-2 border rounded mb-4">

    <button class="w-full bg-green-600 text-white p-3 rounded hover:bg-green-700">
        Salvar
    </button>

</form>
@endsection
