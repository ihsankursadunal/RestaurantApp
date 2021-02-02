@extends('layout')
@section('content')
<div style="padding: 25% 25% 25% 25%;">
    <div class="card" style="width:fit-content; height:fit-content;">
        <div class="cars-body">
            <!-- Large button groups (default and split) -->
            <div style="padding: 10 10 10 10; width:fit-content;">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        ...
                    </ul>
                </div>
                <div class="btn-group" style="margin-left: 32pt; margin-right:32pt;">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        City
                    </button>
                    <ul class="dropdown-menu">
                        ...
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Large button
                    </button>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop