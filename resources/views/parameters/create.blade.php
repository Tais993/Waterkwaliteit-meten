@php
    $fields = ['naam', 'meetEenheid']; // List of fields you want to display errors for
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

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h2 class="w-50 m-auto">Create New Parameter</h2>

        <form action="{{ route('parameters.create') }}" method="POST" class="mt-4 w-50 m-auto">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required id="name">

            </div>

            <div class="mb-3">
                <label for="measuring_unit" class="form-label">meet eenheid:</label>
                <input type="text" class="form-control" name="measuring_unit" required id="measuring_unit">
            </div>


            <button type="submit" class="btn btn-primary">Create Parameter</button>
        </form>
    </div>
@endsection
