@extends('layouts.sclaton')
@section('sideBar')
@extends('sideBar')
@endsection
@section('content')
<div>
    <h2>Todays Status</h2><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#Employee ID</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Employee Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>otto@gmail</td>
                <td>present</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton@gmail</td>
                <td>present</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Farhan</td>
                <td>larrird@gmail</td>
                <td>absent</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection