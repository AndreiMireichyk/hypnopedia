<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Вход</title>
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
    <link href="{{asset('/cpanel/style.css')}}" rel="stylesheet">
</head>
<body class="app">
<div id="loader">
    <div class="spinner"></div>
</div>
<script>window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function () {
            loader.classList.add('fadeOut');
        }, 300);
    });
</script>
<div class="peers ai-s fxw-nw h-100vh">
    <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url({{asset('/images/sc_1_bg-v1.svg')}})">
        <div class="pos-a centerXY">
            <div class="bgc-white bdrs-50p pos-r" style="width:180px;height:180px; border: 5px solid #fff; border-radius: 50%; overflow: hidden">
                <img class="pos-a centerXY" style="width:180px;height:180px" src="{{asset('/cpanel/assets/static/images/logo.gif')}}" alt=""></div>
        </div>
    </div>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40">Авторизация</h4>
        <form method="post" action="/{{app()->getLocale()}}/login">
            @csrf

            <div class="form-group">
                <label class="text-normal text-dark">Email</label>
                <input type="text" class="form-control" placeholder="John Doe" name="email" value="{{old('email')}}">
                @include('auth.error', ['errors'=>$errors->get('email')])
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Пароль</label>
                <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
                @include('auth.error', ['errors'=>$errors->get('password')])
            </div>
            <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                    <div class="peer">
                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall1" name="remember" value="1" class="peer">
                            <label for="inputCall1" class="peers peer-greed js-sb ai-c">
                                <span class="peer peer-greed">Запомнить меня</span>
                            </label>
                        </div>
                    </div>
                    <div class="peer">
                        <button class="btn btn-primary">Вход</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{asset('/cpanel/vendor.js')}}"></script>
<script type="text/javascript" src="{{asset('/cpanel/bundle.js')}}"></script>
</body>
</html>
