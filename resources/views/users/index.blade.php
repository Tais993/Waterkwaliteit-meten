@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="w-100">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

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

                        @if (session('info'))
                            <div class="alert alert-info alert-dismissible fade show mt-2" role="alert">
                                <strong>{{ session('info') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                            <div class="d-flex justify-content-between">
                                <h2>All Users</h2>
                                <button class="btn btn-primary" type="button"><a class="dropdown-item" href="{{ route('users.create') }}"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> ADD</a></button>
                            </div>

                            <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th>email</th>
                                <th>phone num</th>
                                <th>street</th>
                                <th>house num</th>
                                <th>zipcode</th>
                                <th>city</th>
                                <th>country</th>
                                <th>role</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ $user->street }}</td>
                                    <td>{{ $user->house_number }}</td>
                                    <td>{{ $user->zipcode }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>{{ $user->country }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>
                                        <!-- Edit button -->
                                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>

                                        <!-- Delete button (example, consider confirmation dialogs) -->
                                        <form action="{{ route('users.delete', ['user' => $user->id]) }}" method="POST" style="display: inline-block;">
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
