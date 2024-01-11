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

        @include('components.nav')

      </div>
      <div id="countries" class="laos">
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
                          In Laos, amidst enchanting landscapes, AQUALITY 
                          is dedicated to measuring and improving water quality. 
                          Whether in urban centers or remote areas, our measurement 
                          equipment accurately analyzes water quality, taking 
                          into consideration local variables such as human 
                          activities and geographical features. Our close 
                          collaboration with local communities and government 
                          partners is vital to addressing the specific challenges 
                          of each region. Through awareness-raising, we aim not 
                          only for clean water sources but also for resilient 
                          communities actively contributing to sustainable water 
                          management. Explore the measurements taken in Laos below.
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

      @include('components.footer')

</body>
</html>
