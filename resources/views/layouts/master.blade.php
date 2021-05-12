<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Dashboard Template · Bootstrap v4.6</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .nav-bar {
            background-color: #17a2b8;
        }

        .side-bar {
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            background: #17a2b8;
        }

        .menu {
            list-style: none;
            margin-top: 60px;
            padding: auto;
        }

        .menu li {
            color: #fff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.10);
        }

        .menu li a {
            color: #fff;
            display: block;
            text-decoration: none;
            text-transform: uppercase;
            padding: 20px;
        }

        .section-color {
            height: 100%;
            background-color: yellow;
        }


        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="{{ asset('css/dashboard.css') }}">
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-dark sticky-top nav-bar flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">{{ Auth::user()->name }}</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{'Sign Out'}}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 m-0 p-0">
                <div class="side-bar">
                    <ul class="menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('attendenceDetails')}}">Employee List</a></li>
                        <li><a href="{{route('attendenceTaker')}}">Attendence</a></li>
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-10 m-0 p-0">
                <div class="section-color">
            <p>fhsdhfkjhghfskghidhgiufdhgiudfhgifdhgikhfhgifgh</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>