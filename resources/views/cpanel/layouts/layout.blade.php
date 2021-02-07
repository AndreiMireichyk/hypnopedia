<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Панель управления</title>
    <style>#loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }</style>

    @section('css')
        <link href="{{asset('/cpanel/style.css')}}" rel="stylesheet">
        <link href="{{asset('/cpanel/custom.css')}}" rel="stylesheet">
    @show

</head>
<body class="app">
<div id="loader">
    <div class="spinner"></div>
</div>
<div>
    <div class="sidebar">
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <div class="peers ai-c fxw-nw">
                    <div class="peer peer-greed">
                        <a class="sidebar-link td-n" href="{{route('cp.dashboard', app()->getLocale())}}">
                            <div class="peers ai-c fxw-nw">
                                <div class="peer">
                                    <div class="logo d-f ai-c jc-c" style="display: flex">
                                        <img src="/cpanel/assets/static/images/logo-white.png" alt="" style="width: 50px; height: 50px">
                                    </div>
                                </div>
                                <div class="peer peer-greed">
                                    <h5 class="lh-1 mB-0 logo-text">Hypnopedia</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="peer">
                        <div class="mobile-toggle sidebar-toggle">
                            <a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu scrollable pos-r">

                <li class="nav-item mT-30 actived">
                    <a class="sidebar-link" href="{{route('cp.dashboard', app()->getLocale())}}">
                        <span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span>
                        <span class="title">Главная</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-archive"></i>
                        </span>
                        <span class="title">Блог</span>
                        <span class="arrow"><i class="ti-angle-right"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="sidebar-link" href="{{route('cp.articles.index', app()->getLocale())}}">
                                <i class="c-blue-500 ti-pencil-alt2"></i>
                                Статьи
                            </a>
                        </li>
                        <li>
                            <a class="sidebar-link" href="{{route('cp.categories.index', app()->getLocale())}}">
                                <i class="c-blue-500 ti-tag"></i>
                                Тэги
                            </a>
                        </li>
                        <li>
                            <a class="sidebar-link" href="{{route('cp.populars.index', app()->getLocale())}}">
                                <i class="c-blue-500 ti-star"></i>
                                Популярное
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="sidebar-link" href="calendar.html">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-calendar"></i>
                        </span>
                        <span class="title">Рассылки</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="sidebar-link" href="{{route('cp.users.index', app()->getLocale())}}">
                        <span class="icon-holder">
                            <i class="c-blue-500 ti-user"></i>
                        </span>
                        <span class="title">Пользователи</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-container">
        <div class="header navbar">
            <div class="header-container">
                <ul class="nav-left">
                    <li>
                        <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                </ul>

                <ul class="nav-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                            <div class="peer mR-10">
                                <img class="" src="/images/{{app()->getLocale() === 'en' ? 'en' : 'ru'}}.svg" alt="">
                            </div>
                        </a>
                        <ul class="dropdown-menu fsz-sm">
                            <li>
                                <a href="{{route('lang.en')}}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                    <img class="" src="/images/en.svg" alt="">
                                    <span>English</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('lang.ru')}}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                    <img class="" src="/images/ru.svg" alt="">
                                    <span>Русский</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                            <div class="peer mR-10">
                                <img class="w-2r bdrs-50p" src="{{ Auth::user()->avatar_path }}" alt="">
                            </div>
                            <div class="peer">
                                <span class="fsz-sm c-grey-900">{{ Auth::user()->name }}</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu fsz-sm">
                            <li>
                                <a href="{{route('cp.users.edit', [app()->getLocale(), Auth::user()->id])}}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                    <i class="ti-settings mR-10"></i>
                                    <span>Настройки</span>
                                </a>
                            </li>

                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                    <i class="ti-power-off mR-10"></i>
                                    <span>Выйти</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <main class="main-content bgc-grey-100">
            <div id="mainContent">
                @yield('content')
            </div>
        </main>
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
            <span>Copyright © 2020</span>
        </footer>
    </div>
</div>
@section('js')
    <script>
        window.addEventListener('load', function load() {
            const loader = document.getElementById('loader');
            setTimeout(function () {
                loader.classList.add('fadeOut');
            }, 300);
        });
    </script>
    <script type="text/javascript" src="{{asset('/cpanel/vendor.js')}}"></script>
    <script type="text/javascript" src="{{asset('/cpanel/bundle.js')}}"></script>
@show

</body>
</html>
