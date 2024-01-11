@extends('layouts.app')

@section('content')
{{-- <div id="admin-panel">
    <div class="big-card">
      <div class="big-card-title">
        <h1>ADMIN PANEL</h1>
        <img src="../images/dashboard.png">
      </div> --}}
        <div id="content">
            {{-- <div class="admin-btns">
                <a href="#">
                <div class="admin-btn">
                    <div class="icon"><i class="fa-solid fa-user" style="color: #109bff;"></i></div>
                    <div class="title">USERS</div>
                    <div class="arrow"><i class="fa-solid fa-circle-arrow-right" style="color: #109bff;"></i></div>
                </div>
                </a>
                <a href="#">
                <div class="admin-btn">
                    <div class="icon"><i class="fa-solid fa-cart-shopping" style="color: #109bff;"></i></div>
                    <div class="title">PRODUCTS</div>
                    <div class="arrow"><i class="fa-solid fa-circle-arrow-right" style="color: #109bff;"></i></div>
                </div>
                </a>
                <a href="#">
                <div class="admin-btn">
                    <div class="icon"><i class="fa-solid fa-sliders" style="color: #109bff;"></i></div>
                    <div class="title">PARAMETERS</div>
                    <div class="arrow"><i class="fa-solid fa-circle-arrow-right" style="color: #109bff;"></i></div>
                </div>
                </a>
                <a href="#">
                <div class="admin-btn">
                    <div class="icon"><i class="fa-solid fa-right-from-bracket" style="color: #109bff;"></i></div>
                    <div class="title">LOG OUT</div>
                    <div class="arrow"><i class="fa-solid fa-circle-arrow-right" style="color: #109bff;"></i></div>
                </div>
               </a>
            </div> --}}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Admin Panel') }}</div>

                            <div class="d-grid gap-2 col-6 mx-auto" id="admin-p">
                                <button class="btn btn-secondary" type="button"><i class="fa-solid fa-user" style="color: #fff;"></i> Users</button>
                                <button class="btn btn-secondary" type="button"><i class="fa-solid fa-cart-shopping" style="color: #fff;"></i> Products</button>
                                <button class="btn btn-secondary" type="button"><i class="fa-solid fa-sliders" style="color: #fff;"></i> Parameters</button>
                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-right-from-bracket" style="color: #fff;"></i> Log out</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div>
  </div> --}}
@endsection
