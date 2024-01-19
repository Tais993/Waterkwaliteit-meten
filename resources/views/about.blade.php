<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | ABOUT</title>
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
      <div id="about">
        <div class="big-card">
          <div class="big-card-title">
            <h1>ABOUT</h1>
            <img src="./images/about.png">
          </div>
            <div id="content">
              <p>
                <strong>About AQUALITY</strong><br><br>
                At AQUALITY, we believe in the power of water as an essential 
                life source and the impact it has on communities worldwide. 
                Since our inception, we have been dedicated to measuring and 
                improving water quality in Africa, South America, and Asia. Our 
                story begins with a passion for positive change, driven by the 
                realization that access to clean water is a fundamental right 
                that everyone deserves.<br><br>

                Our team consists of a diverse group of professionals. Together, 
                we share a common vision: a world where water sources are safe, 
                clean, and accessible to all communities. Guided by this vision, 
                we strive for sustainable solutions that not only measure water 
                quality but also have a lasting positive impact on the living 
                conditions of the people around us.
              </p>
            </div>
        </div>
      </div>

      @include('components.footer')

</body>
</html>
