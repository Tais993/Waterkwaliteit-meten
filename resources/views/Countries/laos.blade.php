@php use Carbon\Carbon; @endphp

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
                              <th>DATE</th>
                              <th>SOURCE</th>
                              <th>SCORE</th>
                              <th>DETAILS</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($tests as $test)
                              <tr class="table-primary" id="{{ $test->id }}">
                                  <td class="date"><span class="score blue"
                                                         id="new-label">NEW</span>{{ ' ' . Carbon::parse($test->tested_on)->format('Y-m-d') }}
                                  </td>
                                  <td>{{ $test->watersource->name }}</td>
                                  <td>
                                      <span class="score red">2/10</span>
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
                    <img src="../images/laos-1.png">
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

    @include('components.footer')

</body>
</html>
