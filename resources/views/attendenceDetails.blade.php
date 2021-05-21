@extends('layouts.master')
@section('elements')
<div>
    <h2>Todays Status</h2><br>
    <table class="table table-hover" id="attendenceDetailsDataTable">
        <thead>
            <tr>
                <th scope="col">#Employee ID</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Employee Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>
</div>
@endsection