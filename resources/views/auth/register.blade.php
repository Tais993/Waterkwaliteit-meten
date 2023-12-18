<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | REGISTER</title>
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
    <div id="register">
        <div class="big-card">
            <div class="big-card-title">
                <h1>REGISTER</h1>
                <img src="{{ url('images/login.png') }}">
            </div>
            <div id="content">
                <form>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="firstName" placeholder="John">
                                <label for="firstName">FIRST NAME</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lastName" placeholder="Doe">
                                <label for="lastName">LAST NAME</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="example@example.com">
                                <label for="email">EMAIL</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="phone" placeholder="0612345678">
                                <label for="phone">PHONE</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="street" placeholder="Rachelsmolen">
                                <label for="street">STREET</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="houseNumber" placeholder="1">
                                <label for="house_number">HOUSE NUMBER</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="zipCode" placeholder="5612 MA">
                                <label for="email">ZIP CODE</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="city" placeholder="Eindhoven">
                                <label for="city">CITY</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md regform">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="country" placeholder="5612 MA">
                            <label for="country">COUNTRY</label>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="5612 MA">
                                <label for="password">PASSWORD</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Eindhoven">
                                <label for="confirmPassword">CONFIRM PASSWORD</label>
                            </div>
                        </div>
                    </div>




                    {{-- <div id="remember-forgot">
                        <div id="remember-forgot">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div> --}}
                    <button type="submit"><a><span>REGISTER</span></a></button>
                    <div class="register-here">
                        <a href="/login">Already have an account? Log in here!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


@include('components.footer')

</body>
</html>

