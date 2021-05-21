@extends('layouts.master')
@section('elements')
<div class="scroll">
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
            @foreach($dateTimes as $dateTime)
            <tr>
                <th scope="row">1</th>
                <td>{{ $dateTime }}</td>
                <td>{{ Auth::user()->name }}</td>
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
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(function() {
        $(".dropdown-menu").on('click', 'a', function() {
            $(this).parents('.dropdown').find('button').text($(this).text());
        });
    });
</script>
@endsection