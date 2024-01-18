<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | CHECKOUT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Mako&display=swap" rel="stylesheet">

    <link href="{{ url("/css/style.css") }}" rel="stylesheet">
    <link href="{{ url("/css/bootstrap.css") }}" rel="stylesheet">
    <script src="{{ url("/js/bootstrap.js") }}"></script>

    <script src="https://kit.fontawesome.com/29e1c6ffb2.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ url('images/5.png') }}">
</head>
<body>
    <div id="hero">
        <video autoplay playsinline muted loop class="bg-vid-sm">
            <source src="./images/bg.mp4" type="video/mp4">
        </video>
        @include('components.nav')
    </div>
    <div id="checkout">
        <div class="big-card">
            <div class="big-card-title">
                <h1>CHECKOUT</h1>
                <img src="{{ url('images/store.png') }}" alt="store image">
            </div>
            <div id="content">
                <div class="alert alert-info" role="alert">
                    <i class="fa-solid fa-cart-shopping"></i> Please fill in your check out credentials correctly
                </div>

                <div class="checkout">

                <div class="checkout-product">
                    <h1>YOUR PRODUCT</h1>
                    <h2>Product name</h2>
                    <img src="./images/meter.png">
                    <h1>TOTAL: €59,99</h1>
                </div>



                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="John">
                                <label for="firstName" @error('first_name') is-invalid @enderror>FIRST NAME</label>
                                @error('first_name')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Doe">
                                <label for="lastName" @error('last_name') is-invalid @enderror>LAST NAME</label>
                                @error('last_name')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com">
                                <label for="email">EMAIL</label>
                                @error('email')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="phone" name="phone_number" placeholder="0612345678">
                                <label for="phone">PHONE</label>
                                @error('phone_number')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <select type="text" class="form-select" id="country" name="country">
                            <option selected>COUNTRY</option>
                        </select>
                        <label for="country">Please select your country</label>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="street" name="street" placeholder="Rachelsmolen">
                                <label for="street">STREET</label>
                                @error('street')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="houseNumber" name="house_number" placeholder="1">
                                <label for="houseNumber">HOUSE NUMBER</label>
                                @error('house_number')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="zipCode" name="zipcode" placeholder="5612 MA">
                                <label for="zipCode">ZIP CODE</label>
                                @error('zipcode')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <select type="text" class="form-select" id="city" name="city">
                                    <option selected>CITY</option>
                                </select>
                                <label for="country">Please select your city</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit"><a><span>PROCEED</span></a></button>
                </form>
            </div>
            </div>
        </div>
    </div>

@include('components.footer')

</body>
</html>

