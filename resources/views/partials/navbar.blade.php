
    <div class="uk-position-top">

        <div uk-sticky="animation: uk-animation-slide-top; sel-target: #body;
                        cls-active: uk-navbar-sticky uk-navbar-container uk-dark animateLogo ;
                        cls-inactive: uk-navbar-transparent  uk-navbar-container;
                         uk-light; top: 300" uk-navbar>

            <div class="uk-container uk-container-expand uk-width-1-1">

                <nav class="uk-navbar" >

                    <div class="uk-navbar-left">
                        <!-- Branding Image -->
                        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
                            {{ config('app.name') }}
                        </a>
                    </div>
                    <div class="uk-navbar-center">
                        <!-- Branding Image -->

                        <span  class="{{ set_active('/') }}" >
                            <a class="uk-icon-link" href="{{  url('/') }}">
                         <img  class="uk-logo" src="{{asset('logo.png')}}" style="height: 77px;"/>

                            </a>
                        </span>


                    </div>
                    <!-- Wide nav -->
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">

                            @if (Auth::guest())
                                <li  class="{{ set_active('home') }}"><a class="uk-button uk-button-text bound " uk-icon="user"></a>

                                    <div class="uk-navbar-dropdown" mode="click">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li  class="{{ set_active('login') }}"><a class="uk-button uk-button-text " href="{{ route('login') }}" >Login</a></li>
                                            <li class="{{ set_active('register') }}"><a class="uk-button uk-button-text" href="{{ route('register') }}">Register</a></li>
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('dashboard')}}">{{ Auth::user()->name }}</a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif

                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
