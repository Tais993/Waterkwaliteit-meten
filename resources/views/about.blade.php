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

      <div id="nav-modal" class="nav-modal">
        <div class="nav-modal-content">
          <div class="nav-modal-close"><span class="nav-close">&times;</span></div>
          <div class="nav-modal-links">
            <a href="./index.html">HOME</a>
            <a href="./store.html">STORE</a>
            <a href="./about.html">ABOUT</a>
            <a href="./contact.html">CONTACT</a>
            <a href="./login.html">LOGIN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
          </div>
        </div>
      </div>

      <div id="about">
        <div class="big-card">
          <div class="big-card-title">
            <h1>ABOUT</h1>
            <img src="./images/about.png">
          </div>
            <div id="content">
              <p>
                <strong>Over AQUALITY</strong><br><br>
                Bij AQUALITY geloven we in de kracht van water als een
                essentiële levensbron en de impact die het heeft op gemeenschappen
                wereldwijd. Sinds onze oprichting hebben we ons toegewijd aan het
                meten en verbeteren van de waterkwaliteit in Afrika, Zuid-Amerika en
                Azië. Ons verhaal begint met een passie voor positieve verandering,
                gedreven door het besef dat toegang tot schoon water een fundamenteel
                recht is dat iedereen verdient.<br><br>

                Ons team bestaat uit een diverse groep professionals. Samen
                delen we een gezamenlijke visie: een wereld waarin waterbronnen
                veilig, schoon en toegankelijk zijn voor alle gemeenschappen. Met
                deze visie als leidraad streven we naar duurzame oplossingen die
                niet alleen de waterkwaliteit meten, maar ook een blijvende positieve
                invloed hebben op de levensomstandigheden van de mensen om ons heen.
              </p>
            </div>
        </div>
      </div>

      @include('components.footer')

</body>
</html>
