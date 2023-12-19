@php
    $fields = ['parameters', 'naam', 'type']; // List of fields you want to display errors for
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach($fields as $field)
            @error($field)
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
        @endforeach

        <h2 class="w-50 m-auto">Create New Product</h2>

        <form action="{{ route('products.create') }}" method="POST" class="mt-4 w-50 m-auto">
            @csrf
            <div class="mb-3">
                <label for="naam" class="form-label">Name:</label>
                <input type="text" class="form-control" name="naam" required id="naam">

            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control" required name="type" id="type">
            </div>

            <div class="mb-3">
                <label for="voorraad" class="form-label">Voorraad:</label>
                <input type="number" class="form-control" name="voorraad" required id="voorraad">
            </div>

            <div class="mb-3">
                <label class="form-label">Parameters:</label>
                <div class="form-check">
                    @foreach($parameters as $parameter)
                        <input type="checkbox" class="form-check-input" name="parameters[]" value="{{ $parameter->id }}" id="parameter_{{ $parameter->id }}">
                        <label class="form-check-label" for="parameter_{{ $parameter->id }}">{{ $parameter->naam }}</label><br>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
@endsection
