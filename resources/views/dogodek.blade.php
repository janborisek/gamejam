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
            .besedilo{
                padding-left: 150px;
                padding-right: 150px;
                font-size: 26px;
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
                <div class="title m-b-md">O dogodku</div>

                <div class="besedilo">

    GameJam je dogodek na katerem se boste udeleženci pomerili v izdelovanju video iger.<br>
    Cilj je narediti najbolšo igro v 24 urah.<br><br>
    Dogodek se bo odvijal v Dvorani Gaudeamus in sicer 31. Januarja in 1. Februarja.<br>
    Mi bomo poskrbeli za opremo, hrano, prenočišča in sprostitev, da bo vam ostala le misel na kreiranje.<br>
    Če si želite med izdelovanjem vzeti mali odmor, si lahko pomagate z Game Vanom,<br>
    kjer boste lahko igrali različne igre na najnovejših konzolah.<br>
    Na koncu bodo sodniki izbrali najboljšo skupino oz. igro, ki bo prejela lepo nagrado.<br><br>
    Vso delo bo nadzorovano s strani Šolskega centra Velenje in gostov,<br>
    ki vam bodo podali kakšen nasvet in nudili pomoč.<br><br>

    Se vidimo!<br>
    Ekipa Game Jam
                </div>
            @include('/opt/sola');
            </div>
        </div>
    </body>


