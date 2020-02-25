<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre:400i&amp;display=swap&amp;subset=latin-ext"
          rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/favicon.png')}}">
    <title>Sleep and Learn with Hypnopedia</title>
    <meta name="description" content="Improve your mental health and change your life through motivating affirmations with Hypnopedia App.">
    <link href="{{asset('/css/common.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
<header class="header">
    <div class="header__wrap">
        <a class="header__logo" href="{{route('home')}}">
            <img src="{{asset('/images/logo-v1.svg')}}" alt="logo">
        </a>
        <a class="header__toggle"></a>
        <div class="header__menu">
            <div class="active"><a class="header__menu-item" href="#about" data-menu-spy>About</a></div>
            <div><a class="header__menu-item" href="#how_it_work" data-menu-spy>HOW IT WORKS</a></div>
            <div><a class="header__menu-item" href="#features" data-menu-spy>FEATURES</a></div>
            <div><a class="header__menu-item" href="#science" data-menu-spy>SCIENCE</a></div>
            <div><a class="header__menu-item" href="{{route('contacts')}}">Contact</a></div>
        </div>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__menu menu">
            <a class="menu__item" href="{{route('home')}}">
                <img src="{{asset('/images/logo-v1.svg')}}" alt="logo">
            </a>
            <a class="menu__item" href="{{asset('/assets/docs/PrivacyPolicy.pdf')}}" target="_black">Privacy policy</a>
            <a class="menu__item" href="{{asset('/assets/docs/Terms&Conditions.pdf')}}" target="_black">Terms of
                Service</a>
            <a class="menu__item" href="{{env('APP_STORE_URI')}}" target="_blank">GET THE APP</a>
            <a class="menu__item" href="{{route('contacts')}}">CONTACTS</a>
        </div>
        <div class="footer__socials socials">
            <a class="socials__item fb" href="https://www.facebook.com/hypnopedia.application" target="_blank"></a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{asset('/js/common.bundle.js')}}"></script>
@yield('js')
</body>
</html>
