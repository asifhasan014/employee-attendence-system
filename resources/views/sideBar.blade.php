<!DOCTYPE html>
<html>

<head>
    <title>
        Side Bar
    </title>
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
            padding: 10px 50px;
            margin-left: 220px;
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
        .spinner{
            height: 3px;
            background: #fff;
            transition: all 0.3s;
        }
        .spinner.middle,.spinner.bottom{
            margin-top: 3px;
        }
        #openSidebarMenu:checked~.sidebariconToggle > .spinner.middle{
            opacity: 0;
        }
        #openSidebarMenu:checked~.sidebariconToggle > .spinner.top{
            transform: rotate(135deg);
            margin-top: 8px;
        }
        #openSidebarMenu:checked~.sidebariconToggle > .spinner.bottom{
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
            <li><a href="#">Home</a></li>
            <li><a href="#">Employee List</a></li>
            <li><a href="#">Attendence</a></li>
            <li><a href="#">Dashboard</a></li>
        </ul>
    </div>
    <div class="main">
        <h1>this is a pure css file</h1>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</body>

</html>