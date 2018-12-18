@extends('layouts.app')

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
@endsection
