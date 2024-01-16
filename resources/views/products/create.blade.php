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

        <h2 class="w-50 m-auto">Create New Device Type</h2>

        <form action="{{ route('devicetype.create') }}" method="POST" class="mt-4 w-50 m-auto">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required id="name">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="text" class="form-control" required name="price" id="price">
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control" name="stock" required id="stock">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description" rows="5" required id="description"></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>

                <div class="row row-cols-12">
                    <div class="col-9">
                        <input class="form-control" name="image" id="image" />
                    </div>
                    <button type="button" class="btn btn-primary col-3" id="uploadImage">Upload</button>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Parameters:</label>
                <div class="form-check">
                    @foreach($parameters as $parameter)
                        <input type="checkbox" class="form-check-input" name="parameters[]" value="{{ $parameter->id }}" id="parameter_{{ $parameter->id }}">
                        <label class="form-check-label" for="parameter_{{ $parameter->id }}">{{ $parameter->name }}</label><br>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
@endsection
