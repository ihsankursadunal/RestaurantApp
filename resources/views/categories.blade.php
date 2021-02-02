@extends('layout')

@section('content')
<h1>Categories</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categories Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <th scope="row">{{$item[1]}}</th>
                <td>{{$item[0]}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop