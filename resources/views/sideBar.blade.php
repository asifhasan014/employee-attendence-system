@section('loginStyle')
<link href="{{ asset('css/sideBar.css') }}" rel="stylesheet">
@endsection
<div class="header">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <h4><a class="navbar-brand" href="{{ url('home') }}">
                {{ 'Employee Attendence System' }}
            </a></h4>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <h4>
                        {{ Auth::user()->name }}
                    </h4>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
<input type="checkbox" id="openSidebarMenu">
<label for="openSidebarMenu" class="sidebariconToggle">
    <div class="spinner top"></div>
    <div class="spinner middle"></div>
    <div class="spinner bottom"></div>
</label>
<div id="sidebarMenu">
    <ul class="menu">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('attendenceDetails')}}">Employee List</a></li>
        <li><a href="{{route('attendenceTaker')}}">Attendence</a></li>
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>