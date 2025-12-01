@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    {{-- Card Receitas --}}
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold">Receitas do mês</h3>
        <p class="text-3xl font-bold text-green-600 mt-2">R$ {{ }}</p>
    </div>

    {{-- Card Gastos --}}
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold">Gastos do mês</h3>
        <p class="text-3xl font-bold text-red-600 mt-2">R$ {{ }}</p>
    </div>

    {{-- Card Saldo --}}
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold">Saldo</h3>
        <p class="text-3xl font-bold 
            {{ $ganhosTotal - $gastosTotal >= 0 ? 'text-green-600' : 'text-red-600' }}">
           
        </p>
    </div>

</div>
@endsection
