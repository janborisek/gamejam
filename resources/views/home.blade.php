@extends('layouts.app')
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

                    Se vidimo!<br>Ekipa GameJam
                </div>
            </div>
        </div>
    </div>
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
@endsection
