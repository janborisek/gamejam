@extends('layouts.app')
<title>Game Jam</title>
<link rel="icon" href="/public/img/logo.png">
    <style>
            html, body {
                background-color: #fff;
                background-image: url("/public/img/background.png");
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
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Povezavo za preverjanje računa smo poslali na E-mail naslov.') }}
                        </div>
                    @endif

                    {{ __('Pred nadaljevanjem, preverite E-Mail naslov za povezavo.') }}
                    {{ __('Če niste dobili E-Maila') }}, <a href="{{ route('verification.resend') }}">{{ __('kliknite tukaj.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
<p>
    <a href="http://www.scv.si/">
        <img src="/public/img/scv.png" alt="scv" class="scv">
    </a>
</p>

<p>
    <a href="http://ers.scv.si/sl">
        <img src="/public/img/ers.png" alt="ers" class="ers">
    </a>
</p>
@endsection
