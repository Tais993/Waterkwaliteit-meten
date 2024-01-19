@extends('layouts.app')

@section('content')
        <div id="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Admin Panel') }}</div>

                            <div class="d-grid gap-2 col-6 mx-auto" id="admin-p">
                                <button class="btn btn-secondary" type="button"><a class="dropdown-item" href="{{ route('users.index') }}"><i class="fa-solid fa-user" style="color: #fff;"></i> Users</a></button>
                                <button class="btn btn-secondary" type="button"><a class="dropdown-item" href="{{ route('products.index') }}"><i class="fa-solid fa-cart-shopping" style="color: #fff;"></i> Product Types</a></button>
                                <button class="btn btn-secondary" type="button"><a class="dropdown-item" href="{{ route('devices.index') }}"><i class="fa-solid fa-hard-drive" style="color: #fff;"></i> Devices</a></button>
                                <button class="btn btn-secondary" type="button"><a class="dropdown-item" href="{{ route('parameters.index') }}"><i class="fa-solid fa-sliders" style="color: #fff;"></i> Parameters</a></button>
                                <button class="btn btn-danger" type="button">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket" style="color: #fff;"></i>
                                        Log out
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
