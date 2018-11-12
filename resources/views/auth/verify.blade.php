@extends('layouts.app')
@section('hero')
    <div>
        <div class="uk-height-large uk-height-max-small uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top hero">

            <div class="uk-container uk-container-expand uk-width-1-1 uk-margin-auto-top uk-margin-auto-bottom">





            </div>

        </div>
    </div>
@endsection
@section('content')
<div class="uk-section uk-background-muted ">
    <div class="uk-container uk-flex-row uk-flex-center">
            <div class="uk-card-default ">
                <div class="uk-card-header uk-card-primary">{{ __('Verify Your Email Address') }}</div>

                <div class="uk-card-body">
                    @if (session('resent'))
                        <div class="uk-alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
    </div>
</div>
@endsection
