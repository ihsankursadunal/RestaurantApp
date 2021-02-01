@extends('layout')

@section('content')
<h1>List Page</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Restaurant Name</th>
            <th scope="col">Restaurant Email</th>
            <th scope="col">Restaurant Address</th>
        </tr>
    </thead>
    <tbody>
        {{print_r($data)}}
        <!-- @foreach($data as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
        </tr>
        @endforeach -->
    </tbody>
</table>
@stop