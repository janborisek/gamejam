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
                padding-left: 50px;
                padding-right: 50px;
                font-size: 26px;
                border-collapse: collapse;
            }

            .dan{
                padding-left: 10px;
                text-align: center;
                padding: 8px;
                padding-left: 30px;
                padding-right: 30px;
            }

            .dan2{
                font-size: 34px;
            }

            .sponz{
                padding-top: 32px;
                padding-bottom: 32px;
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
                <div class="title m-b-md">Sponzorji</div>

                <table>
                    <tr><td colspan="2" align="center"><a href="https://gamevan.eu/"><img src="/../img/gamevan2.png" height="140" class="sponz"></a></td></tr>
                    <tr><td><a href="https://www.redbull.com/si-sl/"><img src="/../img/redbull.png" height="160" class="sponz" align="center"></a></td>
                        <td><a href="http://www.xcom.si/"><img src="/../img/xcom.png" height="96" class="sponz" align="right"></a></td></tr>
                </table>

            </div>
            <p>
@include('/opt/sola');
        </div>
    </body>


