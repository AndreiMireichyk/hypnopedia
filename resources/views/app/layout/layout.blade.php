<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PH85TDP');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre:400i&amp;display=swap&amp;subset=latin-ext"
          rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/favicon.png')}}?{{env('VERSION')}}">
    <title>Sleep and Learn with Hypnopedia</title>
    <meta name="description"
          content="Improve your mental health and change your life through motivating affirmations with Hypnopedia App.">
    <link href="{{asset('/css/common.css')}}?{{env('VERSION')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
<header class="header">
    <div class="header__wrap">
        <a class="header__logo" href="{{route('home')}}">
            <img src="{{asset('/images/logo-v1.svg')}}?{{env('VERSION')}}" alt="logo">
        </a>
        <a class="header__toggle"></a>
        <div class="header__menu">
            @if (Route::currentRouteName() == 'home')
                <div class="active">
                    <a class="header__menu-item" href="/#about" data-menu-spy>About</a>
                </div>
            @else
                <div>
                    <a class="header__menu-item" href="/#about" data-menu-spy>About</a>
                </div>
            @endif
            <div><a class="header__menu-item" href="/#how_it_work" data-menu-spy>HOW IT WORKS</a></div>
            <div><a class="header__menu-item" href="/#features" data-menu-spy>FEATURES</a></div>
            <div><a class="header__menu-item" href="/#science" data-menu-spy>SCIENCE</a></div>
            <div><a class="header__menu-item" href="/#faq" data-menu-spy>FAQ</a></div>
            @if (Route::currentRouteName() == 'contacts')
                <div class="active">
                    <a class="header__menu-item" href="{{route('contacts')}}">Contact</a>
                </div>
            @else
                <div>
                    <a class="header__menu-item" href="{{route('contacts')}}">Contact</a>
                </div>
            @endif
        </div>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__menu menu">
            <a class="menu__item" href="{{route('home')}}">
                <img src="{{asset('/images/logo-v1.svg')}}?{{env('VERSION')}}" alt="logo">
            </a>
            <a class="menu__item" href="{{asset('/assets/docs/PrivacyPolicy.pdf')}}?{{env('VERSION')}}" target="_black">Privacy policy</a>
            <a class="menu__item" href="{{asset('/assets/docs/Terms&Conditions.pdf')}}?{{env('VERSION')}}" target="_black">Terms of
                Service</a>
            <a class="menu__item" href="https://go.onelink.me/app/25150d3" target="_blank">GET THE APP</a>
            <a class="menu__item" href="{{route('contacts')}}">CONTACTS</a>
        </div>
        <div class="footer__socials socials">
            <a class="socials__item tw" href="https://twitter.com/Hypnopedia_app" target="_blank"></a>
            <a class="socials__item fb" href="https://www.facebook.com/hypnopedia.application" target="_blank"></a>
        </div>
    </div>
</footer>
<div id="widget"></div>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH85TDP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript" src="{{asset('/js/common.bundle.js')}}?{{env('VERSION')}}"></script>
@yield('js')
</body>
</html>
