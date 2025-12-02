@extends('layout.app')

@section('title', 'Ganhos')

@section('content')

<a href="{{ route('earnings.create') }}"
   class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mb-4 inline-block">
   Novo Ganho
</a>

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-3 text-left">Descrição</th>
                <th class="p-3 text-left">Valor</th>
                <th class="p-3 text-left">Data</th>
                <th class="p-3 text-left">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($ganhos as $g)
                <tr class="border-b">
                    <td class="p-3">{{ $g->descricao }}</td>
                    <td class="p-3 text-green-600 font-semibold">R$ {{ $g->valor }}</td>
                    <td class="p-3">{{ $g->data }}</td>
                    <td class="p-3">
                       <a href="{{ route('earnings.edit', $g->id) }}" class="text-blue-600">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
