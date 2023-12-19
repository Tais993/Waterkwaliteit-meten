@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>

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
                                <h2>All Products</h2>
                                <a href="{{ route('products.create') }}" class="btn btn-primary">ADD</a>
                            </div>

                            <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Voorraad</th>
                                <th>Parameters</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->naam }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td>{{ $product->voorraad }}</td>
                                    <td>@foreach($product->parameters as $parameter) {{ $parameter->naam }}@endforeach</td>
                                    <!-- Add other columns' data as needed -->
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
