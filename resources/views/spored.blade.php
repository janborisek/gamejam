        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
<title>Game Jam</title>
<link rel="icon" href="/../img/logo.png">
       <!-- Styles -->
       <style>
            html, body {
                background-color: #fff;
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

            .title {
                font-size: 100px;
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
                font-size: 82px;
                padding-bottom: 30px;
            }
            .tabela{
                padding-right: 124px;
                font-size: 26px;
            }

            .dan{
                padding-left: 10px;
                text-align: center;
                padding: 7px;
                padding-left: 30px;
                padding-right: 30px;
            }

            .dan2{
                padding-left: 10px;
                text-align: center;
                padding-left: 30px;
                padding-right: 30px;
                font-size: 46px;
            }

            .dan3{
                padding-left: 10px;
                text-align: center;
                padding-left: 30px;
                padding-right: 30px;
                font-size: 38px;
            }

        </style>
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
                        <a href="{{ url('/sporedk')}}">Spored</a>
                        <a href="{{ url('/sponzor') }}">Sponzorji</a>
                        <a href="{{ route('login') }}">Profil</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Prijava na dogodek</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">Spored</div>

                <table class="tabela">

                    <tr><td></td><td colspan="2" class="dan2">31. Januar</td></tr>
                    <tr><td class="dan3">12:00</td><td class="dan">Odprtje dogodka, zbiranje v Gaudeamusu</td></tr>
                    <tr><td class="dan3">15:00</td><td class="dan">Začetek 24h tekmovanja, razglasitev teme</td></tr>
                    <tr><td><br></td><td><br></td></tr>
                    <tr><td></td><td colspan="2" class="dan2">1. Februar</td></tr>
                    <tr><td class="dan3">15:00</td><td class="dan">Konec 24h tekmovanja</td></tr>
                    <tr><td class="dan3">15:10</td><td class="dan">Začetek preizkušanja in izbiranja najboljše igre</td></tr>
                    <tr><td class="dan3">16:00</td><td class="dan">Razglasitev zmagovite ekipe in podelitev nagrad</td></tr>
                    <tr><td class="dan3">17:00</td><td class="dan">Konec dogodka</td></tr>
                </table>
            </div>
@include('/opt/sola');
        </div>
    </body>


