@extends('layouts.app')
@section('hero')
    <div class="uk-height-small uk-background-cover uk-overflow-hidden uk-dark uk-flex uk-flex-top" style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
        <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical"></div>
    </div>
@endsection
@section('content')
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-card-default">
                <div class="uk-card-header">Dashboard</div>

                <div class="uk-card-body">
                    @if (session('status'))
                        <div class="uk-alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="uk-card-title">You are logged in!</div>
                </div>
            </div>
    </div>
</div>
@endsection
