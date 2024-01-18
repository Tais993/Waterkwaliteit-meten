@php
    $fields = ['parameter', 'naam']; // List of fields you want to display errors for
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

        <h2 class="w-50 m-auto">Edit Parameter</h2>

        <form action="{{ route('parameters.update', $parameter->id) }}" method="POST" class="mt-4 w-50 m-auto">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required id="name" value="{{ $parameter->name }}">
            </div>

            <div class="mb-3">
                <label for="measuring_unit" class="form-label">Measuring unit:</label>
                <input type="text" class="form-control" required name="measuring_unit" id="measuring_unit" value="{{ $parameter->measuring_unit }}">
            </div>

            <button type="submit" class="btn btn-primary">Edit Parameter</button>
        </form>
    </div>
@endsection
