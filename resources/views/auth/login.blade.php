@extends('layouts.app')

@section('content')
    <div class="uk-section uk-height-viewport hero">

        <div class="uk-container uk-container-center">

            <div class="uk-width-1-2@m uk-align-center ">

                <div class="uk-padding uk-margin-large-top uk-box-shadow-large uk-card-default uk-border-rounded">

                    <h2>Login</h2>

                    <form class="uk-form-stacked" role="form" method="POST" action="{{ route('login') }}">

                        @csrf

                        <div>

                            <label class="uk-form-label">Email Address</label>
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                <input id="email" type="text" class="uk-border-pill uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}"
                                       name="email" value="{{ old('email') }}" required autofocus>

                            </div>

                            @if ($errors->has('email'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        {{--<div>--}}

                        {{--<label class="uk-form-label">Email Address Or Name</label>--}}
                        {{--<div class="uk-inline uk-width-1-1">--}}
                        {{--<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>--}}
                        {{--<input id="name" type="text" class="uk-input{{ $errors->has('email') || $errors->has('name') ? ' uk-form-danger' : '' }}"--}}
                        {{--name="name" value="{{ old('name') }}" required autofocus>--}}

                        {{--</div>--}}


                        {{--@if ($errors->has('name'))--}}
                        {{--<div class="uk-alert-danger" uk-alert>--}}
                        {{--{{ $errors->first('name') }}--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        {{--@if ($errors->has('email'))--}}
                        {{--<div class="uk-alert-danger" uk-alert>--}}
                        {{--{{ $errors->first('email') }}--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        {{--</div>--}}


                        <div class="uk-margin">
                            <label class="uk-form-label">Password</label>

                            <div class="uk-inline uk-width-1-1" >
                                {{--<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>--}}
                                <a id="show_password" uk-icon="icon: unlock"  class="uk-form-icon uk-form-icon-flip "></a>
                                <input id="password" type="password" class="uk-border-pill uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password" value="{{ old('password') }}" required>
                                {{--<a id="show_password" uk-icon="icon: unlock"></a>--}}
                            </div>
                            @if ($errors->has('password'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                            <label><input class="uk-checkbox" type="checkbox" name="remember"{{ old('remember') ? ' checked' : '' }}> Remember me</label>
                        </div>

                        <div class="uk-margin ">
                            <button class="uk-button uk-button-primary uk-border-pill" type="submit" name="button">Login</button>
                            <div class="uk-button-group uk-float-right uk-flex-column">
                            <a class="" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                            <a class="" href="{{ route('register') }}">
                                 Create Account?
                            </a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
