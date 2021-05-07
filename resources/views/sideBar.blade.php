<!DOCTYPE html>
<html>

<head>
    <title>
        Side Bar
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            overflow-x: hidden;
            height: 100%;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff;
            padding: 0;
            margin: 0;
        }

        .header {
            background: #00889D;
            width: 100%;
            height: 60px;
            position: fixed;
            z-index: 10;
            opacity: 0.9;
            text-align: center;
        }

        .sidebariconToggle {
            width: 22px;
            height: 22px;
            position: absolute;
            z-index: 20;
            top: 22px;
            left: 15px;
            cursor: pointer;
        }

        .main {
            height: 100%;
            margin-top: 60px;
            margin-right: 150px;
            margin-left: 60px;
            padding: 10px 50px;
            transform: translateX(0%);
            transition: transform 250ms ease-in-out;
        }

        #openSidebarMenu:checked~.main {
            transform: translateX(15%);
        }

        #sidebarMenu {
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            width: 220px;
            margin-top: 60px;
            background: #17a2b8;
            transform: translateX(-220px);
            transition: transform 250ms ease-in-out;
        }

        #openSidebarMenu:checked~#sidebarMenu {
            transform: translateX(0px);
        }

        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
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

        .sidebariconToggle {
            width: 22px;
            height: 22px;
            position: absolute;
            z-index: 20;
            top: 22px;
            left: 15px;
            cursor: pointer;
        }

        .spinner {
            height: 3px;
            background: #fff;
            transition: all 0.3s;
        }

        .spinner.middle,
        .spinner.bottom {
            margin-top: 3px;
        }

        #openSidebarMenu:checked~.sidebariconToggle>.spinner.middle {
            opacity: 0;
        }

        #openSidebarMenu:checked~.sidebariconToggle>.spinner.top {
            transform: rotate(135deg);
            margin-top: 8px;
        }

        #openSidebarMenu:checked~.sidebariconToggle>.spinner.bottom {
            transform: rotate(-135deg);
            margin-top: -9px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Employee Attendence System</h1>
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
        </ul>
    </div>
    @yield('content')
</body>

</html>
<script>
    $(function() {
        $(".dropdown-menu").on('click', 'a', function() {
            $(this).parents('.dropdown').find('button').text($(this).text());
        });
    });
</script>