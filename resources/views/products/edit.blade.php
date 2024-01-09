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

        <h2 class="w-50 m-auto">Edit Product</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST" class="mt-4 w-50 m-auto">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="naam" class="form-label">Name:</label>
                <input type="text" class="form-control" name="naam" required id="naam" value="{{ old('naam', $product->naam) }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control" required name="type" id="type" value="{{ old('type', $product->type) }}">
            </div>

            <div class="mb-3">
                <label for="voorraad" class="form-label">Voorraad:</label>
                <input type="number" class="form-control" name="voorraad" required id="voorraad" value="{{ old('voorraad', $product->voorraad) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Parameters:</label>
                <div class="form-check">
                    @foreach($parameters as $parameter)
                        <input type="checkbox" class="form-check-input" name="parameters[]" value="{{ $parameter->id }}" id="parameter_{{ $parameter->id }}" {{ $product->parameters->contains('id', $parameter->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="parameter_{{ $parameter->id }}">{{ $parameter->naam }}</label><br>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Edit Product</button>
        </form>
    </div>
@endsection
