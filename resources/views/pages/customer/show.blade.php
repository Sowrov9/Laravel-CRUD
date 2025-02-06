@extends('layout.backend.main')
@section('page-content')

<div class="row">
    <h1>{{$customer->name}} details</h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{$customer->id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$customer->name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$customer->email}}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{$customer->phone}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$customer->address}}</td>
            </tr>
        </table>
</div>


@endsection
