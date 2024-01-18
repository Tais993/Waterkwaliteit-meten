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

        <h2 class="w-50 m-auto">Create New User</h2>

        <form action="{{ route('users.create') }}" method="POST" class="mt-4 w-50 m-auto">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="first_name" class="form-label">First name:</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" autocomplete="given-name" required id="first_name">
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-6 mb-3">
                    <label for="last_name" class="form-label">Last name:</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" required name="last_name" autocomplete="family-name" id="last_name">
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" required name="email" autocomplete="email" id="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" required name="password" autocomplete="new-password" id="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm password:</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" required name="password_confirmation" autocomplete="new-password" id="password_confirmation">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone number:</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" required name="phone_number" autocomplete="tel" id="phone_number">
                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country:</label>
                <select type="text" class="form-select @error('country') is-invalid @enderror" required name="country" autocomplete="country" id="country">
                @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </select>
            </div>

            <div class="row">
                <div class="col-9 mb-3">
                    <label for="city" class="form-label">City:</label>
                    <select type="text" class="form-select @error('city') is-invalid @enderror" required name="city" autocomplete="address-level2" id="city">
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </select>
                </div>

                <div class="col-3 mb-3">
                    <label for="zipcode" class="form-label">Zipcode:</label>
                    <input type="text" class="form-control @error('zipcode') is-invalid @enderror" required name="zipcode" autocomplete="postal-code" id="zipcode">
                    @error('zipcode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-9 mb-3">
                    <label for="street" class="form-label">Street:</label>
                    <input type="text" class="form-control @error('street') is-invalid @enderror" required name="street" autocomplete="address-line1" id="street">
                    @error('street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 mb-3">
                    <label for="house_number" class="form-label">House number:</label>
                    <input type="text" class="form-control @error('house_number') is-invalid @enderror" required name="house_number" autocomplete="address-line2" id="house_number">
                    @error('house_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <select name="role_id" id="role" class="form-select" required>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
    </div>
@endsection
