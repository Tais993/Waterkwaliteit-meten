@php use Carbon\Carbon; @endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUALITY | NETHERLANDS</title>
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
        <source src="{{ asset('images/bg.mp4') }}" type="video/mp4">
    </video>

    @include('components.nav')
</div>
<div id="countries" class="netherlands">
    <div class="country-card">
        <div class="country-card-title">
            <h1>NETHERLANDS</h1>
            <img src="{{ asset('images/netherlands-1.png') }}">
        </div>
        <div id="content">
            <div class="country-info">
                <div class="general-score">
                    <h1>SCORE</h1>
                    <img src="{{ asset('images/4.png') }}">
                </div>
                <div class="text">
                    <p>

                        In The Netherlands, a country known for its flat landscapes and intricate water 
                        management systems, AQUALITY is committed to monitoring and enhancing water 
                        quality. From bustling cities to serene countryside, our cutting-edge devices 
                        collect vital data on water quality, taking into account various factors such 
                        as urban activities and environmental conditions. Our partnerships with local 
                        communities and governmental organizations are pivotal, and we strive for 
                        sustainable solutions tailored to the specific requirements of each region.
                    </p>
                </div>
            </div>
            <div class="country-data">
                <h2>MEASUREMENTS</h2>
                <div class="table-wrapper">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>DATE</th>
                            <th>SOURCE</th>
                            <th>SCORE</th>
                            <th>DETAILS</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tests as $key => $test)
                                <tr class="country-table {{ $key === 0 ? 'table-primary' : '' }}" id="{{ $test->id }}">
                                    <td class="date">
                                        {!! $key === 0 ? "<span class='score blue'>NEW</span>" : '' !!}
                                        {{ ' ' . Carbon::parse($test->tested_on)->format('Y-m-d') }}
                                    </td>
                                    <td>{{ $test->watersource->name }}</td>
                                    <td>
                                        {!! generateScoreHtml($test->value) !!}
                                    </td>
                                    <td>
                                        <button class="details-btn" id="{{ $test->id }}"><span>DETAILS</span></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($tests as $test)
<!-- The Modal -->
<div id="modal-{{ $test->id }}" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h1>{{ $test->watersource->country }}<br>DETAILS {{ Carbon::parse($test->tested_on)->format('Y-m-d') }}</h1>
            <img src="{{ asset('images/senegal-1.png') }}">
            <div class="modal-close"><span class="close">&times;</span></div>
        </div>
        <div class="modal-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>MEASUREMENT</th>
                        <th>VALUE</th>
                        <th>TIME</th>
                        <th>TYPE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $test->parameter->name }}</td>
                        <td>{{ $test->value . ' ' . $test->parameter->measuring_unit }}</td>
                        <td>{{ Carbon::parse($test->tested_on)->format('H:i') }}</td>
                        <td>{{ $test->watersource->type }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach

@php
    function generateScoreHtml($value): string
     {
        $score = calculateScore($value);
        $color = getColorBasedOnScore($score);
        return "<span class='score $color'>$score/10</span>";
    }

    function calculateScore($value): int
    {
        // Map the value from 0 to 15 to a score out of 10
        return round(($value / 15) * 10);
    }

    function getColorBasedOnScore($score): string
    {
        if ($score >= 9) {
            return 'blue';
        } elseif ($score >= 7) {
            return 'green';
        } elseif ($score >= 5) {
            return 'yellow';
        } elseif ($score >= 3) {
            return 'orange';
        } else {
            return 'red';
        }
    }
@endphp

@include('components.footer')

</body>
</html>
