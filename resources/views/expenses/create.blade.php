@extends('layout.app')

@section('title', 'Add Expense')

@section('content')
<form action="{{ route('expenses.store') }}" method="POST"
      class="bg-white p-6 rounded-lg shadow max-w-lg">

    @csrf

    <h1 class="text-2xl font-bold mb-4">Add Expense</h1>

    <label class="block mb-2">Description</label>
    <input name="description" class="w-full p-2 border rounded mb-4">

    <label class="block mb-2">Amount (R$)</label>
    <input type="number" step="0.01" name="amount"
           class="w-full p-2 border rounded mb-4">

    <label class="block mb-2">Date</label>
    <input type="date" name="date"
           class="w-full p-2 border rounded mb-4">

    <button class="w-full bg-blue-600 text-white p-3 rounded hover:bg-blue-700">
        Save
    </button>
</form>
@endsection
