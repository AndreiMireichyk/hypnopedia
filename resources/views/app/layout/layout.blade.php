<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/favicon.png')}}?{{env('VERSION')}}">
    <title>@yield('title')</title>

    <meta name="description" content="@yield('meta_desc')">
    <meta name="keywords" content="@yield('meta_keys')">
    <meta property="og:title" content="@yield('og-title')"/>
    <meta property="og:description" content="@yield('og-desc')"/>
    <meta property="og:url" content="@yield('og-url')"/>
    <meta property="og:image" content="@yield('og-img')"/>
</head>
<body>
<header class="header @yield('is_light')">
    <div class="header__wrap">
        <a class="header__logo" href="{{route('home')}}">
            <img class="normal" src="{{asset('/images/logo-v1.svg')}}?{{env('VERSION')}}" alt="logo">
            <img class="light" src="{{asset('/images/logo-light.svg')}}?{{env('VERSION')}}" alt="logo">
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

            @if (in_array(Route::currentRouteName(), ['blog', 'blog.article', 'blog.category']))
                <div class="active">
                    <a class="header__menu-item active" href="{{route('blog')}}">Blog</a>
                </div>
            @else
                <div>
                    <a class="header__menu-item" href="{{route('blog')}}">Blog</a>
                </div>
            @endif

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
        <div class="footer__group">
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
    </div><a class="footer__badge" href="https://www.producthunt.com/posts/hypnopedia" target="_blank"><img src="/images/ph_badge.svg"></a>
    </div>
</footer>

{{--@include('app.layout.metrics')--}}
@section('css')
    <link href="{{asset('/css/common.css')}}?{{env('VERSION')}}" rel="stylesheet">
@show
@section('js')
    <script type="text/javascript" src="{{asset('/js/common.bundle.js')}}?{{env('VERSION')}}"></script>
@show
</body>
</html>
