<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | HOME</title>
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
        <video autoplay playsinline muted loop class="bg-vid">
          <source src="{{ url('images/bg.mp4') }}" type="video/mp4">
        </video>

        @include('components.nav')
        @if(session('error'))
            <div class="alert top-0 left-0 z-2 w-100 position-fixed alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1>GREAT WATER QUALITY FOR EVERYONE</h1>
        <p>
          Welcome to AQUALITY, where we are committed to measuring 
          water quality in Africa, South America, and Asia, and making 
          these results available to the world. Discover how we harness 
          the power of technology to map water quality globally.
        </p>
      </div>

      <div id="switch">
        <label class='switch-label'>
          <input type='checkbox' onclick="display()">
          <span class='back'>
            <span class='toggle'></span>
            <span class='label data'>DATA</span>
            <span class='label info'>INFO</span>
          </span>
        </label>
      </div>

    <div id="data-cards">
        <div class="data-card">
          <h2>SENEGAL</h2>
          <div class="data-img">
            <img src="{{ url('images/senegal.png') }}">
          </div>
          <button type="button"><a href="/landen/senegal"><span>MORE INFO</span></a></button>
        </div>
        <div class="data-card">
          <h2>HAITI</h2>
          <div class="data-img">
            <img src="{{ url('images/haiti.png') }}">
          </div>
          <button type="button"><a href="/landen/haiti"><span>MORE INFO</span></a></button>
        </div>
        <div class="data-card">
          <h2>LAOS</h2>
          <div class="data-img">
            <img src="{{ url('images/laos.png') }}">
          </div>
          <button type="button"><a href="/landen/laos"><span>MORE INFO</span></a></button>
        </div>
    </div>

    <div id="info-cards">
      <div class="info-card" id="information">
        <div class="info-title">
          <img src="{{ url('images/information.png') }}">
          <div>INFORMATION</div>
        </div>
        <div id="content">
          <p>
            <strong>Why Water Quality Matters</strong><br><br>
            Clean water sources are essential for the well-being 
            of communities worldwide. At AQUALITY, we understand 
            that water quality directly impacts health and quality 
            of life. Explore the challenges we face and how our 
            work contributes to improving water quality, which 
            in turn enhances a healthier living environment for everyone.
          </p>
        </div>
      </div>
      <div class="info-card" id="infographic">
        <div class="info-title">
          <img src="{{ url('images/infographic.png') }}">
          <div>INFOGRAPHIC</div>
        </div>
        <div id="content" class="center-text">
          <a href="{{ url('images/water-infographic.png') }}" target="_blank" >
            <img id="imageresource" alt="Infographic" src="{{ url('images/water-infographic.png') }}" title="Click to open">
            Click to open
          </a>
        </div>
      </div>
    </div>

    @include('components.footer')

</body>
</html>
