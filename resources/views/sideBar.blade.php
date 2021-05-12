@section('loginStyle')
<link href="{{ asset('css/sideBar.css') }}" rel="stylesheet">
@endsection
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h1>Employee Attendence System</h1>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
</div>
<input type="checkbox" id="openSidebarMenu">
<label for="openSidebarMenu" class="sidebariconToggle">
    <div class="spinner top"></div>
    <div class="spinner middle"></div>
    <div class="spinner bottom"></div>
</label>
<div id="sidebarMenu">
    <ul class="menu">
        <li><a href="{{route('mainHome')}}">Home</a></li>
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

<script>
    $(function() {
        $(".dropdown-menu").on('click', 'a', function() {
            $(this).parents('.dropdown').find('button').text($(this).text());
        });
    });
</script>