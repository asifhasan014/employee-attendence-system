@extends('layouts.sclaton')
@section('sideBar')
@extends('sideBar')
@endsection
@section('content')
<div class="main">
    <h2>Give Your Attendence</h2><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Month</th>
                <th scope="col">Date</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>otto@gmail</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Absent
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Present</a>
                            <a class="dropdown-item" href="#">Absent</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton@gmail</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Absent
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Present</a>
                            <a class="dropdown-item" href="#">Absent</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Farhan</td>
                <td>larrird@gmail</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Absent
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Present</a>
                            <a class="dropdown-item" href="#">Absent</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
<script>
    $(function() {
        $(".dropdown-menu").on('click', 'a', function() {
            $(this).parents('.dropdown').find('button').text($(this).text());
        });
    });
</script>