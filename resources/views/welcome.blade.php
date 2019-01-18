<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Game Jam</title>
<link rel="icon" href="/../img/logo.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/../img/background.png");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 500;
                height: 100vh;
                margin: 0;
            }

            @media only screen and (max-width: 1450px) {
                .logo {
                    width: 80%;
                }
                .links {
                    color: #ffffff;
                    margin-left: 12px;
                    font-size: 24px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }
                .scv{
                    width: 20%;
                }
                .ers{
                    width: 20%;
                }

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #ffffff;
                padding: 0 26px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .scv{
                position: absolute;
                right: 8px;
                bottom: 00px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Domov</a>
                        <a href="{{ url('/dogodek')}}">O dogodku</a>
                        <a href="{{ url('/spored')}}">Spored</a>
                        <a href="{{ url('/sponzor') }}">Sponzorji</a>
                        <a href="{{ url('/home') }}">Profil</a>
                    @else
                        <a href="{{ url('/') }}">Domov</a>
                        <a href="{{ url('/dogodek')}}">O dogodku</a>
                        <a href="{{ url('/spored')}}">Spored</a>
                        <a href="{{ url('/sponzor') }}">Sponzorji</a>
                        <a href="{{ route('login') }}">Profil</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Prijava na dogodek</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md"></div>

                <div class="links">

                </div>
            </div>
<img src="/../img/logo.png" alt="logo" class="logo">
@include('/opt/sola');
        </div>
    </body>
</html>
