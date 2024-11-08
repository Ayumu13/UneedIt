<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav id="navbar">
    <div id="logonav">
        <img src="{{ asset('Photos/cropped-logo UNEED-IT.png') }}" alt="Logo">
    </div>
    <div id="logoptions">
        <ul>
            <li class="redc"><a href="{{ url('home') }}">Home</a></li>
            <li class="bluec"><a href="{{ url('OverOns') }}">Over ons</a></li>
            <li class="redc"><a href="{{ url('service') }}">Service</a></li>
            <li class="bluec"><a href="{{ url('zakelijk') }}">Zakelijk</a></li>
            <li class="redc"><a href="{{ url('faq') }}">Faq</a></li>
            <li class="bluec"><a href="{{ url('Bezorgdiensten') }}">Bezorgdiensten</a></li>
            <li class="redc"><a href="{{ url('account') }}">Account</a></li>
        </ul>
    </div>
</nav>
<main id="mainhome">
    <div id="hometext">
        <img src="{{ asset('Photos/cropped-logo UNEED-IT(notext).png') }}" alt="Logo">
        <p>
            <span class="white-text">voor al uw reparaties kunt u terecht bij </span>
            <span class="red-text">Uneed-</span>
            <span class="blue-text">it</span>
        </p>
    </div>
</main>
<footer id="footer">
    <div id="adress">
        <img src="{{ asset('Photos/location.png') }}" alt="Location">
        <p>ZUIDBAAN 514, 2841MD</p>
        <p>MOORDRECHT</p>
    </div>
    <div id="telefoonnnumer">
        <img src="{{ asset('Photos/phone.png') }}" alt="Phone">
        <p>+316 30 985 409 SERVICENUMMER</p>
        <p>+3118 28 202 18 KANTOOR</p>
        <p>BEREIKBAAR VAN 09:00-17:30</p>
    </div>
    <div id="tijd">
        <img src="{{ asset('Photos/clock.png') }}" alt="Clock">
        <p>MA T/M VRIJ, 09:00-18:30</p>
        <p>TELEFONISCH BEREIKBAAR</p>
        <p>VOOR ABONNEMENTHOUDERS</p>
    </div>
</footer>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
