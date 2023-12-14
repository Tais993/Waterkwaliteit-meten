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
          <source src="./images/bg.mp4" type="video/mp4">
        </video>
  
        <nav id="nav">
          <div class="nav-logo">
            <a href="./index.html">
              <img src="./images/5.png"> AQUALITY
            </a>
          </div>
          <div class="right">
            <a href="./store.html">STORE</a>
            <a href="./about.html">ABOUT</a>
            <a href="./contact.html">CONTACT</a>
            <a href="./login.html">LOGIN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
          </div>
          <i id="mobile-menu" class="fa-solid fa-bars nav-icon" style="color: #ffffff;"></i>
        </nav>
  
        <div id="nav-modal" class="nav-modal">
          <div class="nav-modal-content">
            <div class="nav-modal-close">
              <span class="nav-close">&times;</span>
            </div>
            <div class="nav-modal-links">
                <a href="./index.html">HOME</a>
                <a href="./store.html">STORE</a>
                <a href="./about.html">ABOUT</a>
                <a href="./contact.html">CONTACT</a>
                <a href="./login.html">LOGIN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
            </div>
          </div>
        </div>
  
        <h1>EEN GOEDE WATERKWALITEIT VOOR IEDEREEN</h1>
        <p>
          Welkom bij AQUALITY, waar we ons  inzetten om de waterkwaliteit in Afrika, 
          Zuid-Amerika en Azië te meten en deze resultaten beschikbaar te stellen 
          voor de buitenwereld. Ontdek hoe wij de kracht van technologie 
          inzetten om de kwaliteit van het water wereldwijd in kaart te brengen.
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
      <!-- <a href="./countries/senegal.html" -->
        <div class="data-card">
          <h2>SENEGAL</h2>
          <div class="data-img">
            <img src="./images/senegal.png">
          </div>
          <button type="button"><a href="./countries/senegal.html"><span>MORE INFO</span></a></button>
        </div>
      <!-- </a> -->
      <!-- <a href="./countries/haiti.html"> -->
        <div class="data-card">
          <h2>HAITI</h2>
          <div class="data-img">
            <img src="./images/haiti.png">
          </div>
          <button type="button"><a href="./countries/haiti.html"><span>MORE INFO</span></a></button>
        </div>
      <!-- </a>
      <a href="./countries/laos.html"> -->
        <div class="data-card">
          <h2>LAOS</h2>
          <div class="data-img">
            <img src="./images/laos.png">
          </div>
          <button type="button"><a href="./countries/laos.html"><span>MORE INFO</span></a></button>
        </div>
      <!-- </a> -->
    </div>
  
    <div id="info-cards">
      <div class="info-card" id="information">
        <div class="info-title">
          <img src="./images/information.png">
          <div>INFORMATION</div>
        </div>
        <div id="content">
          <p>
            <strong>Waarom waterkwaliteit belangrijk is</strong><br><br>
            Schone waterbronnen zijn essentieel voor het welzijn van 
            gemeenschappen over de hele wereld. Bij AQUALITY 
            begrijpen we dat de kwaliteit van water direct van invloed 
            is op de gezondheid en levenskwaliteit. Ontdek de uitdagingen 
            waarmee we worden geconfronteerd en hoe ons werk bijdraagt aan 
            het verbeteren van de waterkwaliteit, wat op zijn beurt bijdraagt 
            aan een gezondere leefomgeving voor iedereen.
          </p>
        </div>
      </div>
      <div class="info-card" id="infographic">
        <div class="info-title">
          <img src="./images/infographic.png">
          <div>INFOGRAPHIC</div>
        </div>
        <div id="content" class="center-text">
          <a href="./images/water-infographic.png" target="_blank" >
            <img id="imageresource" alt="Infographic" src="./images/water-infographic.png" title="Click to open">
            Click to open
          </a>
        </div>
      </div>
    </div>
  
    <footer>
      <h2>EXPLORE</h2>
      <ul>
        <li><a href="./index.html">HOME</a></li>
        <li><a href="./store.html">STORE</a></li>
        <li><a href="./about.html">ABOUT</a></li>
        <li><a href="./contact.html">CONTACT</a></li>
      </ul>
    </footer>
  
    <script src="./main.js"></script>
</body>
</html>
