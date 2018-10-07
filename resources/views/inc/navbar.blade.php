<nav>
        <div class="nav-wrapper teal">
            <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name', 'Ką Pamatyti') }}</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                 <!-- Authentication Links -->
                 @guest
                 <li>
                     <a href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
                 <li>
                     <a href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
             @else
                <li><a href="{{ url('/') }}">{{ __('Home') }}<i class="material-icons left">home</i></a></li>
                <li><a href="{{ url('/dashboard') }}">{{ __('Dashboard') }}<i class="material-icons left">speed</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="place" data-beloworigin="true">{{ __('Places') }}<i class="material-icons left">place</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="route" data-beloworigin="true">{{ __('Routes') }}<i class="material-icons left">map</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="location" data-beloworigin="true">{{ __('Location') }}<i class="material-icons left">my_location</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="park" data-beloworigin="true">{{ __('Park') }}<i class="material-icons left">pets</i></a></li>
                <li><a class="black" href="{{ url('/users') }}">{{ __('Users') }}<i class="material-icons left">people</i></a></li>
                <li><a class="black" href="{{ url('/posts') }}">{{ __('Posts') }}<i class="material-icons left">send</i></a></li>
                <li><a class="black" href="{{ url('/cash') }}">{{ __('Cash') }}<i class="material-icons left">euro_symbol</i></a></li>
                    <li>
                    <a class="dropdown-trigger" href="#!" data-target="dropdown1" data-beloworigin="true">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                @endguest
            
            </ul>
        </div>
    </nav>
     <!-- User Dropdown Structure START-->
     <ul id="dropdown1" class="dropdown-content">
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </ul>
        <!-- User Dropdown Structure END-->

        <!-- Places Dropdown Structure START-->
        <ul id="place" class="dropdown-content">
            <li><a href="{{ url('/places') }}">{{ __('Places') }}</a></li>
            <li><a href="{{ url('/placeimages') }}">{{ __('Place Image') }}</a></li>
            <li><a href="{{ url('/placetypes') }}">{{ __('Place Type') }}</a></li>
        </ul>
        <!-- Places Dropdown Structure END-->

        <!-- Routes Dropdown Structure START-->
        <ul id="route" class="dropdown-content">
            <li><a href="{{ url('/routes') }}">{{ __('Route') }}</a></li>
            <li><a href="{{ url('/routeplaces') }}">{{ __('Route Places') }}</a></li>
        </ul>
        <!-- Routes Dropdown Structure END-->

        <!-- Location Dropdown Structure START-->
        <ul id="location" class="dropdown-content">
            <li><a href="{{ url('/cities') }}">{{ __('Cities') }}</a></li>
            <li><a href="{{ url('/counties') }}">{{ __('Counties') }}</a></li>
            <li><a href="{{ url('/countries') }}">{{ __('Countries') }}</a></li>
            <li><a href="{{ url('/municipalities') }}">{{ __('Municipalities') }}</a></li>
        </ul>
        <!-- Location Dropdown Structure END-->

        <!-- Location Dropdown Structure START-->
        <ul id="park" class="dropdown-content">
            <li><a href="{{ url('/park') }}">{{ __('Park') }}</a></li>
            <li><a href="{{ url('/parkregiones') }}">{{ __('Park Regiones') }}</a></li>
        </ul>
        <!-- Location Dropdown Structure END-->
            