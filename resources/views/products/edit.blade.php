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
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required id="name" value="{{ old('naam', $product->name) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea type="text" class="form-control" name="description" required id="description" rows="5"></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" class="form-control" step="any" required name="price" id="price" value="{{ old('type', $product->price) }}">
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control" name="stock" required id="stock" value="{{ old('voorraad', $product->stock) }}">
            </div>

            <label for="image" class="form-label">Image:</label>
            <div class="mb-3 row row-cols-8">
                <div class="col-10">
                    <input type="text" class="form-control" name="image" id="image">
                </div>
                <button type="button" class="col-2 btn btn-primary" name="image" id="image">upload</button>
            </div>

            <div class="mb-3">
                <label class="form-label">Parameters:</label>
                <div class="form-check">
                    @foreach($parameters as $parameter)
                        <input type="checkbox" class="form-check-input" name="parameters[]" value="{{ $parameter->id }}" id="parameter_{{ $parameter->id }}" {{ $product->parameters->contains('id', $parameter->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="parameter_{{ $parameter->id }}">{{ $parameter->name }}</label><br>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Edit Product</button>
        </form>
    </div>
@endsection
