        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

       <!-- Styles -->
       <style>
            html, body {
                background-color: #fff;
                background-image: url("/img/background.png");
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
                padding: 0 72px;
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

            .scv{
                position: absolute;
                right: 30px;
                bottom: 00px;
            }

            .ers{
                position: absolute;
                left: 24px;
                bottom: 00px;
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
                        <a href="{{ route('login') }}">Prijava</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registracija</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">Sponzorji</div>

                <table>
                    <tr><td colspan="2" align="center"><img src="/img/gamevan.png" height="140" class="sponz"></td></tr>
                    <tr><td><img src="/img/redbull.png" height="160" class="sponz" align="center"></td><td><img src="/img/mercator.png" height="250" class="sponz" align="right"></td></tr>
                </table>

            </div>
            <p>
    <a href="http://scv.si/">
        <img src="/img/scv.png" alt="scv" class="scv">
    </a>
</p>

<p>
    <a href="http://ers.scv.si/">
        <img src="/img/ers.png" alt="ers" class="ers">
    </a>
</p>
        </div>
    </body>


