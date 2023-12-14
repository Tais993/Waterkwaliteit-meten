<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | LAOS</title>
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
          <source src="../images/bg.mp4" type="video/mp4">
        </video>
    
        <nav>
          <div class="nav-logo">
            <a href="../index.html">
              <img src="../images/5.png"> AQUALITY
            </a>
          </div>
            <div class="right">
              <a href="../store.html">STORE</a>
              <a href="../about.html">ABOUT</a>
              <a href="../contact.html">CONTACT</a>
              <a href="../login.html">LOGIN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
            </div>
            <a href="javascript:void(0);" class="nav-icon">
              <i id="mobile-menu" class="fa-solid fa-bars" style="color: #ffffff;"></i>
            </a>
        </nav>
      </div>
    
      <div id="nav-modal" class="nav-modal">
        <div class="nav-modal-content">
          <div class="nav-modal-close"><span class="nav-close">&times;</span></div>
          <div class="nav-modal-links">
            <a href="../index.html">HOME</a>
            <a href="../store.html">STORE</a>
            <a href="../about.html">ABOUT</a>
            <a href="../contact.html">CONTACT</a>
            <a href="../login.html">LOGIN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
          </div>
        </div>
      </div>
    
      <div id="country" class="laos">
        <div class="country-card">
          <div class="country-card-title">
            <h1>LAOS</h1>
            <img src="../images/laos-1.png">
          </div>
            <div id="content">
                <div class="country-info">
                  <div class="general-score">
                    <h1>SCORE</h1>
                    <img src="../images/1.png">
                  </div>
                    <div class="text">
                        <p>
                          In Laos, te midden van betoverende landschappen, 
                          zet AQUALITY zich in voor het meten en 
                          verbeteren van de waterkwaliteit. Of het nu 
                          stedelijke centra betreft of afgelegen gebieden, 
                          onze meetappratuur analyseren nauwkeurig de waterkwaliteit, 
                          rekening houdend met lokale variabelen zoals menselijke 
                          activiteiten en geografische kenmerken. Onze nauwe samenwerking 
                          met lokale gemeenschappen en overheidspartners is van vitaal 
                          belang om de specifieke uitdagingen van elke regio aan te pakken. 
                          Door bewustmaking streven we naar niet alleen schone waterbronnen, 
                          maar ook naar veerkrachtige gemeenschappen die actief bijdragen 
                          aan duurzaam waterbeheer. Ontdek de metingen die zijn gedaan in 
                          Laos hieronder.
                        </p>
                    </div>
                </div>
                <div class="country-data">
                    <h2>MEASUREMENTS</h2>
                    <div class="table-wrapper">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">DATE</th>
                            <th scope="col">SOURCE</th>
                            <th scope="col">SCORE</th>
                            <th scope="col">DETAILS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-primary">
                            <th scope="row"><span class="score blue" id="new-label">NEW</span> 16.11.2023</th>
                            <td>Mekong</td>
                            <td><span class="score red">2/10</span></td>
                            <td><button id="sen-161123-btn"><span>DETAILS</span></button></td>
                          </tr>
                          <tr>
                            <th scope="row">15.11.2023</th>
                            <td>Nam Ou</td>
                            <td><span class="score orange">4/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                          </tr>
                          <tr>
                            <th scope="row">14.11.2023</th>
                            <td>Mekong</td>
                            <td><span class="score yellow">6/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                          </tr>
                          <tr>
                            <th scope="row">13.11.2023</th>
                            <td>Nam Ou</td>
                            <td><span class="score green">8/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                          </tr>
                          <tr>
                            <th scope="row">12.11.2023</th>
                            <td>Mekong</td>
                            <td><span class="score blue">10/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                          </tr>
                          <tr>
                            <th scope="row">11.11.2023</th>
                            <td>Nam Ou</td>
                            <td><span class="score green">7/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                          </tr>
                          <tr>
                            <th scope="row">10.11.2023</th>
                            <td>Mekong</td>
                            <td><span class="score yellow">5/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                          </tr>
                          <tr>
                            <th scope="row">09.11.2023</th>
                            <td>Nam Ou</td>
                            <td><span class="score orange">3/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                          </tr>
                          <tr>
                            <th scope="row">08.11.2023</th>
                            <td>Mekong</td>
                            <td><span class="score red">1/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
      </div>
    
      <footer>
        <h2>EXPLORE</h2>
        <ul>
          <li><a href="../index.html">HOME</a></li>
          <li><a href="../store.html">STORE</a></li>
          <li><a href="../about.html">ABOUT</a></li>
          <li><a href="../contact.html">CONTACT</a></li>
        </ul>
      </footer>
    
      <script src="../main.js"></script>
</body>
</html>
