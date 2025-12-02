@extends('layout.app')

@section('title', 'Edit Expense')

@section('content')
<form action="{{ route('expenses.update', $expense->id) }}" method="POST"
      class="bg-white p-6 rounded-lg shadow max-w-lg">

    @csrf
    @method('PUT')

    <h1 class="text-2xl font-bold mb-4">Edit Expense</h1>

    <label class="block mb-2">Description</label>
    <input name="description" value="{{ $expense->description }}"
           class="w-full p-2 border rounded mb-4">

    <label class="block mb-2">Amount (R$)</label>
    <input type="number" step="0.01" name="amount" value="{{ $expense->amount }}"
           class="w-full p-2 border rounded mb-4">

    <label class="block mb-2">Date</label>
    <input type="date" name="date" value="{{ $expense->date }}"
           class="w-full p-2 border rounded mb-4">

    <button class="w-full bg-blue-600 text-white p-3 rounded hover:bg-blue-700">
        Update
    </button>
</form>
@endsection
