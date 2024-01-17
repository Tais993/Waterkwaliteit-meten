@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Parameters') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('failure'))
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                <strong>{{ session('failure') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between">
                            <h2>All Parameters</h2>
                            <button class="btn btn-primary" type="button"><a class="dropdown-item" href="{{ route('parameters.create') }}"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> ADD</a></button>
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>meet eenheid</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($parameters as $parameter)
                                <tr>
                                    <td>{{ $parameter->id }}</td>
                                    <td>{{ $parameter->name }}</td>
                                    <td>{{ $parameter->measuring_unit }}</td>
                                    <td>
                                        <!-- Edit button -->
                                        <a href="{{ route('parameters.edit', ['parameter' => $parameter->id]) }}" class="btn btn-primary">Edit</a>

                                        <!-- Delete button (example, consider confirmation dialogs) -->
                                        <form action="{{ route('parameters.delete', ['parameter' => $parameter->id]) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
