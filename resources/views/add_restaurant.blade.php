@extends('layout')
@section('content')
@if(Session::get('status')=='success')
<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> <br>
    Restaurant Added Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    window.onload = function() {
        $('#successModal').fadeIn();
        setTimeout(function() {
            $('#successModal').fadeOut();
        }, 5000);
        var modal = document.getElementById("successModal");
        window.onclick = function(event) {
            if (event.target == modal) {
                $('#successModal').fadeOut();
            }
        }
    }
</script>
@endif
<div style="width: 50%; margin-top:16px;">
    <form action="/add" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Restaurant Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Restaurant Address</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop
<div class="modal" tabindex="-1" id="successModal">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #2bc11b;">
            <div class="modal-header">
                <h5 class="modal-title" style="color: white;">Restourant Successfully Added</h5>
            </div>
            <div class="modal-body">
                <p>Restourant Successfully Added</p>
            </div>
        </div>
    </div>
</div>