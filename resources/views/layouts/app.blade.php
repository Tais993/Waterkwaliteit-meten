<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Mako&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/29e1c6ffb2.js" crossorigin="anonymous"></script>

    <link href="{{ url("/css/admin.css") }}" rel="stylesheet">
    <link href="{{ url("/css/bootstrap.css") }}" rel="stylesheet">
    <script src="{{ url("/js/bootstrap.js") }}"></script>

    <link rel="icon" type="image/x-icon" href="{{ url('images/5.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('users.index') }}">
                                        {{ __('Users') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('products.index') }}">
                                        {{ __('Products') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('parameters.index') }}">
                                        {{ __('Parameters') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script type="module">
    import countries from "{{ asset('js/countries.js') }}";
    import countryCities from "{{ asset('js/cities.js') }}"

    const selectCountry = document.getElementById('country');
    const selectCity = document.getElementById('city');

    @if(isset($user))
        const userCountry = "{{ $user->country }}";
        const userCity = "{{ $user->city }}";
    @endif

    if (selectCountry) {

        // Create and append options to the select element
        countries.forEach(country => {
            const option = document.createElement('option');
            option.value = country.name; // Set the value to country code
            option.text = country.name; // Set the display text to country name

            if (country.name === userCountry) {
                option.selected = true;
            }

            selectCountry.appendChild(option);
        });

        const event = new Event('change');
        selectCountry.dispatchEvent(event);
    }

    if (selectCity) {
        function populateCities(selectedCountry) {
            const citySelect = document.getElementById('city');
            citySelect.innerHTML = ''; // Clear existing options

            const selectedCountryCities = countryCities[0][selectedCountry];

            if (selectedCountryCities && selectedCountryCities.length > 0) {

                selectedCountryCities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    citySelect.appendChild(option);

                    if (city === userCity) {
                        option.selected = true;
                    }
                });

            } else {

                const option = document.createElement('option');
                option.textContent = 'No cities available';
                citySelect.appendChild(option);

            }
        }

        selectCountry.addEventListener('change', function() {
            const selectedCountry = this.value;
            populateCities(selectedCountry);
        });

        const index = [...selectCountry.options].findIndex(option => option.value === userCountry);
        if (index !== -1) {
            selectCountry.selectedIndex = index;
            selectCountry.dispatchEvent(new Event('change'));
        }
    }


</script>
</body>
</html>
