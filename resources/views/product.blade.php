<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | STORE</title>
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

      <div id="product">
        <div class="product-card">
          <div class="product-card-title">
            <h1>WATERMETER</h1>
          </div>
            <div class="product-page">
                <div class="product-hero">
                    <img src="images/meter.png">
                    <div class="product-price">
                        <h2>€59,99</h2>
                        <div class="stock">
                            <div class="stock-status-instock"></div>
                                IN STOCK
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud 
                            exercitation ullamco laboris nisi 
                            ut aliquip ex ea commodo consequat.
                        </p>
                        <button id="buy-btn" class="product-btn" type="button"><a href="#"><span>BUY</span></a></button>
                    </div>
                </div>
                <div class="product-desc">
                    <h2>DESCRIPTION</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit 
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                        occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="product-specs">
                    <h2>SPECIFICATIONS</h2>
                    <div class="table-wrapper">
                        <table class="table" id="product-specs">
                          <tbody>
                            <tr>
                              <td class="spec">Specification</td>
                              <td>Value</td>
                            </tr>
                            <tr>
                              <td class="spec">Specification</td>
                              <td>Value</td>
                            </tr>
                            <tr>
                              <td class="spec">Specification</td>
                              <td>Value</td>
                            </tr>
                            <tr>
                              <td class="spec">Specification</td>
                              <td>Value</td>
                            </tr>
                            <tr>
                              <td class="spec">Specification</td>
                              <td>Value</td>
                            </tr>
                            <tr>
                              <td class="spec">Specification</td>
                              <td>Value</td>
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
