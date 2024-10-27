<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login or Sign Up</title>
    <link rel="stylesheet" href="registrationstyle.css">
</head>
<body>
<nav id="navbar">
    <div id="logonav">
        <img src="Photos/cropped-logo%20UNEED-IT.png">
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
<div class="container">
    <div class="login-signup">
        <h1>Het lijkt erop dat ze niet ingelogd zijn</h1>
        <button onclick="window.location.href='login.html'">Log In</button>
        <button onclick="window.location.href='registration.html'">Sign Up</button>
    </div>
</div>
</body>
</html>
