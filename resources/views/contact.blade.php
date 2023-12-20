<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | CONTACT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Mako&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/29e1c6ffb2.js" crossorigin="anonymous"></script>

    <link href="{{ url("/css/style.css") }}" rel="stylesheet">
    <link href="{{ url("/css/bootstrap.css") }}" rel="stylesheet">
    <script src="{{ url("/js/bootstrap.js") }}"></script>

    <link rel="icon" type="image/x-icon" href="{{ url('images/5.png') }}">
</head>
<body>
    <div id="hero">
        <video autoplay playsinline muted loop class="bg-vid-sm">
          <source src="./images/bg.mp4" type="video/mp4">
        </video>

        @include('components.nav')
      </div>
      <div id="contact">
        <div class="big-card">
          <div class="big-card-title">
            <h1>CONTACT</h1>
            <img src="{{ url('images/contact.png') }}">
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
                            <input type="email" class="form-control" id="email" placeholder="johndoe@example.com">
                            <label for="email">EMAIL</label>
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="phone" placeholder="+31 6 12345678">
                            <label for="phone">PHONE</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 10rem"></textarea>
                    <label for="message">MESSAGE</label>
                  </div>
                  <button type="submit"><a><span>SEND</span></a></button>
                </form>
            </div>
        </div>
      </div>

    @include('components.footer')

</body>
</html>
