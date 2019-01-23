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
                <div class="card-header">Naredi novo ekipo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/success">
                        @csrf

                        <div class="form-group row">
                            <label for="ime" class="col-md-4 col-form-label text-md-right">{{ __('Ime ekipe') }}</label>

                            <div class="col-md-6">
                                <input id="ime" type="text" class="form-control" name="ime">
                            </div>
                        </div>
                        <!--<div class="form-group row">
                            <label for="geslo" class="col-md-4 col-form-label text-md-right">{{ __('Ključ') }}</label>

                            <div class="col-md-6">
                                <input id="geslo" type="text" class="form-control" name="geslo">
                            </div>
                        </div>-->
                        <div class="form-group row">
                            <label for="opis" class="col-md-4 col-form-label text-md-right">{{ __('Opis') }}</label>

                            <div class="col-md-6">
                                <input id="opis" type="text" class="form-control" name="opis">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="opis" class="col-md-4 col-form-label text-md-right">{{ __('Član 2') }}</label>

                            <div class="col-md-6">
                                <input id="uporabnik_2" type="text" class="form-control" name="uporabnik_2" value="@gmail.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="opis" class="col-md-4 col-form-label text-md-right">{{ __('Član 3') }}</label>

                            <div class="col-md-6">
                                <input id="uporabnik_3" type="text" class="form-control" name="uporabnik_3" value="@gmail.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="opis" class="col-md-4 col-form-label text-md-right">{{ __('Član 4') }}</label>

                            <div class="col-md-6">
                                <input id="uporabnik_4" type="text" class="form-control" name="uporabnik_4" value="@gmail.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="opis" class="col-md-4 col-form-label text-md-right">{{ __('Član 5') }}</label>

                            <div class="col-md-6">
                                <input id="uporabnik_5" type="text" class="form-control" name="uporabnik_5" value="@gmail.com">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Naredi ekipo') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('/opt/sola')
@endsection
