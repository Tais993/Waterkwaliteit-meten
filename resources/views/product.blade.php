<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | {{ strtoupper($product->name) }}</title>
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
          <source src="{{ asset('images/bg.mp4') }}" type="video/mp4">
        </video>

        @include('components.nav')
      </div>

      <div id="product">
        <div class="product-card">
          <div class="product-card-title">
            <h1>{{ $product->name }}</h1>
          </div>
            <div class="product-page">
                <div class="product-hero">
                    <img src="{{ asset('images/meter.png') }}">
                    <div class="product-price">
                        <h2>€ {{ $product->price }}</h2>
                        <div class="stock">
                          @if($product->stock > 5)
                          <div class="stock-status-instock"></div>
                          IN STOCK
                          @elseif($product->stock == 0)
                          <div class="stock-status-soldout"></div>
                          SOLD OUT
                          @else
                          <div class="stock-status-almostsoldout"></div>
                          LAST ITEMS
                          @endif
                        </div>
                        @if($product->stock > 0)
                        <button id="buy-btn" class="product-btn" type="button"><a href="{{ route('product.checkout', $product->id) }}"><span>BUY</span></a></button>
                        @endif
                    </div>
                </div>
                <div class="product-desc">
                    <h2>DESCRIPTION</h2>
                    <p>
                        {{ $product->description }}
                    </p>
                </div>
                <div class="product-specs">
                    <h2>SPECIFICATIONS</h2>
                    <div class="table-wrapper">
                        <table class="table" id="product-specs">
                          <tbody>
                          @foreach($product->parameters as $parameter)
                            <tr>
                              <td class="spec">{{ $parameter->name }}</td>
                              <td>{{ $parameter->measuring_unit }}</td>
                            </tr>
                          @endforeach
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
