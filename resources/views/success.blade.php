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

            .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.3s;
  cursor: pointer;
}

.button2:hover {
  background-color: white;
  color: black;

}

.button2 {
  background-color: #008CBA;
  color: white;
  border: 3px solid #008CBA;
  border-radius: 10px;
}
.button1 {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 4px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.3s;
  cursor: pointer;
}

        </style>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vaša ekipa!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <b>Ime</b><br> {{$ime}}<br><br>
                        <b>Opis</b><br> {{$opis}}
                </div>
            </div>
        </div>
    </div>
</div>
@include('/opt/sola')
@endsection
