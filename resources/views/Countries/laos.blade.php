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
    <video autoplay muted loop class="bg-vid-sm">
        <source src="{{ url('images/bg.mp4') }}" type="video/mp4">
    </video>

    <nav>
        <div class="nav-logo">
            <a href="/">
                <img src="{{ url('images/5.png') }}"> AQUALITY
            </a>
        </div>
        <div class="right">
            <a href="/about">ABOUT</a>
            <a href="/contact">CONTACT</a>
        </div>
    </nav>
</div>

<div id="country" class="laos">
    <div class="country-card">
        <div class="country-card-title">
            <img src="../images/laos-1.png">
            <div>LAOS</div>
        </div>
        <div id="content">
            <div class="country-info">
                <img src="../images/1.png">
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
                            <th scope="col">LOCATION</th>
                            <th scope="col">SCORE</th>
                            <th scope="col">DETAILS</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-primary">
                            <th scope="row"><span class="badge text-bg-primary">NEW</span> 16.11.2023</th>
                            <td>Mekong</td>
                            <td><span class="badge text-bg-1">2/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                        </tr>
                        <tr>
                            <th scope="row">15.11.2023</th>
                            <td>Nam Ou</td>
                            <td><span class="badge text-bg-2">4/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                        </tr>
                        <tr>
                            <th scope="row">14.11.2023</th>
                            <td>Mekong</td>
                            <td><span class="badge text-bg-3">6/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                        </tr>
                        <tr>
                            <th scope="row">13.11.2023</th>
                            <td>Nam Ou</td>
                            <td><span class="badge text-bg-4">8/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                        </tr>
                        <tr>
                            <th scope="row">12.11.2023</th>
                            <td>Mekong</td>
                            <td><span class="badge text-bg-5">10/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                        </tr>
                        <tr>
                            <th scope="row">11.11.2023</th>
                            <td>Nam Ou</td>
                            <td><span class="badge text-bg-4">7/10</span></td>
                            <td><button><span>DETAILS</span></button></td>
                        </tr>
                        <tr>
                            <th scope="row">10.11.2023</th>
                            <td>Nam Ou</td>
                            <td><span class="badge text-bg-3">5/10</span></td>
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
        <li><a href="/">HOME</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/contact">CONTACT</a></li>
    </ul>
</footer>

<script src="{{ url("js/main.js") }}"></script>
</body>
</html>
