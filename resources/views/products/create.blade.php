@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Product</h2>
        <form action="{{ route('products.create') }}" method="POST">
            @csrf
            <!-- Add form fields for product details (name, type, etc.) -->
            <label for="naam">naam:</label>
            <input type="text" name="naam" id="naam">

            <label for="type">type:</label>
            <input type="text" name="type" id="type">

            <label for="type">Voorraad:</label>
            <input type="number" name="voorraad" id="voorraad">

            @foreach($parameters as $parameter)
                <div>
                    <input type="checkbox" name="parameters[]" value="{{ $parameter->id }}" id="parameter_{{ $parameter->id }}">
                    <label for="parameter_{{ $parameter->id }}">{{ $parameter->naam }}</label>
                </div>
            @endforeach
            <!-- Add other fields as needed -->

            <button type="submit">Create Product</button>
        </form>
    </div>
@endsection
