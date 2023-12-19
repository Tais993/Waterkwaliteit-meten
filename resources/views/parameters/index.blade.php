@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Parameters') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('failure'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('failure') }}
                            </div>
                        @endif

                            <div class="d-flex justify-content-between">
                                <h2>All Parameters</h2>
                                <a href="{{ route('parameters.create') }}" class="btn btn-primary">ADD</a>
                            </div>

                            <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>meet eenheid</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($parameters as $parameter)
                                <tr>
                                    <td>{{ $parameter->id }}</td>
                                    <td>{{ $parameter->naam }}</td>
                                    <td>{{ $parameter->meetEenheid }}</td>
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
