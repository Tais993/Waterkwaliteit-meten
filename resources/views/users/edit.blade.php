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

        <h2 class="w-50 w-sm-100 m-auto">Edit User</h2>

        <form action="{{ route('users.update', $user->id) }}" method="POST" class="mt-4 w-50 w-sm-100 m-auto">
            @csrf
            @method('PUT')

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" required id="first_name" value="{{ $user->first_name }}">
                </div>

                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" required id="last_name" value="{{ $user->last_name }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required id="email" value="{{ $user->email }}">
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="text" class="form-control" name="phone_number" required id="phone_number" value="{{ $user->phone_number }}">
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-9">
                    <label for="street" class="form-label">Street:</label>
                    <input type="text" class="form-control" name="street" required id="street" value="{{ $user->street }}">
                </div>

                <div class="col-md-3">
                    <label for="house_number" class="form-label">House number:</label>
                    <input type="text" class="form-control" name="house_number" required id="house_number" value="{{ $user->house_number }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country:</label>
                <select type="text" class="form-select" name="country" required id="country"></select>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-9">
                    <label for="city" class="form-label">City:</label>
                    <select type="text" class="form-select" name="city" required id="city"></select>
                </div>

                <div class="col-md-3">
                    <label for="zipcode" class="form-label">Zipcode:</label>
                    <input type="text" class="form-control" name="zipcode" required id="zipcode" value="{{ $user->zipcode }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <select name="role_id" id="role" class="form-select" required>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $role->id === $user->role->id ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Edit User</button>
        </form>
    </div>
@endsection
