@extends('layouts.app')
<title>Game Jam</title>
<link rel="icon" href="/../img/logo.png">
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

            .scv{
                position: absolute;
                right: 8px;
                bottom: 00px;
            }

            .ers{
                position: absolute;
                left: 2px;
                bottom: 00px;
            }

            .fb{
                position: absolute;
                top: 60px;
                left: 2px;
            }

        </style>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prijavljeni ste na ERŠ GameJam 2019!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Se vidimo!<br>Ekipa Game Jam<br><br>

                    Če želite delati v ekipi, jo lahko naredite tukaj.<br><br>

                    Spodaj pa se lahko pridružite že obstoječi ekipi.<br>
                </div>
            </div>
        </div>
    </div>
</div>
@include('/opt/sola');
@endsection
