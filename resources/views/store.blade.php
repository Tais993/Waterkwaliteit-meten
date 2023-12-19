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

      <div id="store">
        <div class="big-card">
          <div class="big-card-title">
            <h1>STORE</h1>
            <img src="./images/store.png">
          </div>
            <div class="product-list">
                @foreach($products as $product)
                    <div class="product">
                        <div class="product-ls-img">
                            <img src="./images/meter.png">
                        </div>
                        <div class="product-ls-desc">
                            <h2>{{ $product->naam . ' ' . $product->type }}</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div class="product-ls-price">
                            <h2>€59,99</h2>
                            <div class="stock">
                                @if($product->voorraad > 5)
                                    <div class="stock-status-instock"></div>
                                    IN STOCK
                                @elseif($product->voorraad == 0)
                                    <div class="stock-status-soldout"></div>
                                    SOLD OUT
                                @else
                                    <div class="stock-status-almostsoldout"></div>
                                    LAST ITEMS
                                @endif
                            </div>
                            <button id="info-btn" type="button"><a href="#"><span>INFO</span></a></button>
                            @if($product->voorraad > 0)
                                <button id="buy-btn" type="button"><a href="#"><span>BUY</span></a></button>
                            @endif
                        </div>
                    </div>
              @endforeach
            </div>
        </div>
      </div>
      @include('components.footer')
</body>
</html>
