<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | RESET PASSWORD</title>
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
        <source src="{{ url('images/bg.mp4') }}" type="video/mp4">
    </video>

    @include('components.nav')

</div>
<div id="reset">
    <div class="big-card">
        <div class="big-card-title">
            <h1>RESET PASSWORD</h1>
            <img src="{{ url('images/login.png') }}">
        </div>
        <div id="content">
            @error('email')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" value="{{ $email ?? old('email') }}" placeholder="je naam...">
                        <label for="email">EMAIL</label>
                    </div>
                </div>

                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" value="" name="password" id="password" placeholder="wachtwoord...">
                        <label for="password">PASSWORD</label>
                    </div>
                </div>

                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="herhaal wachtwoord...">
                        <label for="password_confirmation">CONFIRM PASSWORD</label>
                    </div>
                </div>

                <button type="submit"><a><span>RESET PASSWORD</span></a></button>
            </form>
        </div>
    </div>
</div>


@include('components.footer')

</body>
</html>

