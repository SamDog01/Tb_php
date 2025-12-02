@extends('layout.app')

@section('title', 'Expenses')

@section('content')
<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Expenses</h1>
    <a href="{{ route('expenses.create') }}" 
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Add Expense
    </a>
</div>

@if(session('success'))
    <div class="bg-green-200 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3 text-left">Description</th>
            <th class="p-3 text-left">Amount</th>
            <th class="p-3 text-left">Date</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($expenses as $expense)
            <tr class="border-b">
                <td class="p-3">{{ $expense->description }}</td>
                <td class="p-3">R$ {{ number_format($expense->amount, 2, ',', '.') }}</td>
                <td class="p-3">{{ $expense->date }}</td>
                <td class="p-3">
                    <a href="{{ route('expenses.edit', $expense->id) }}" 
                       class="text-blue-600 hover:underline">Edit</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="p-3 text-center text-gray-500">No expenses found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
