@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Devices') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('failure'))
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                <strong>{{ session('failure') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between">
                            <h2>All Devices</h2>
                            <a href="{{ route('devices.create') }}" class="btn btn-primary">ADD</a>
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device Type</th>
                                <th>User email</th>
                                <th>MacAddress</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($devices as $device)
                                <tr>
                                    <td>{{ $device->id }}</td>
                                    <td>{{ $device->deviceType->name }}</td>
                                    <td>{{ $device->user ? $device->user->email : 'no user added' }}</td>
                                    <td>{{ $device->macaddress }}</td>
                                    <td>
                                        <!-- Edit button -->
                                        <a href="{{ route('devices.edit', ['device' => $device->id]) }}"
                                           class="btn btn-primary">Edit</a>

                                        <!-- Delete button (example, consider confirmation dialogs) -->
                                        <form action="{{ route('devices.delete', ['device' => $device->id]) }}"
                                              method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure?')">Delete
                                            </button>
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
