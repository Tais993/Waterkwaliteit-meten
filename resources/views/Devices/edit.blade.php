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

        <h2 class="w-50 m-auto">Edit Product</h2>

        <form action="{{ route('devices.update', $device->id) }}" method="POST" class="mt-4 w-50 m-auto">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Device type:</label>
                <select class="form-select" @selected($device->devicetype->id) name="device_type_id">
                    @foreach($devicetypes as $devicetype)
                        <option value="{{ $devicetype->id }}">{{ $devicetype->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">User:</label>
                <select class="form-select" @if($device->user) @selected($device->user->id) @endif name="user_id">
                    <option value=""></option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->email }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="macaddress" class="form-label">Macaddress:</label>
                <input type="text" class="form-control" name="macaddress" required id="macaddress" value="{{ old('macaddress', $device->macaddress) }}">
            </div>

            <button type="submit" class="btn btn-primary">Edit Product</button>
        </form>
    </div>
@endsection
