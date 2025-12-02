@extends('layout.app')

@section('title', 'Edit Earning')

@section('content')
<form action="{{ route('earnings.update', $earning->id) }}" method="POST"
      class="bg-white p-6 rounded-lg shadow max-w-lg">
    
    @csrf
    @method('PUT')

    <label>Description</label>
    <input type="text" name="descricao" value="{{ $earning->descricao }}">

    <label>Value</label>
    <input type="number" step="0.01" name="valor" value="{{ $earning->valor }}">

    <label>Date</label>
    <input type="date" name="data" value="{{ $earning->data }}">

    <button>Update</button>
</form>

@endsection
