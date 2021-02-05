@extends('layout')
@section('content')
<div style="padding: 25% 25% 25% 25%;">
    <div class="card" style="width:fit-content; height:fit-content;">
        <div class="cars-body">
            <!-- Large button groups (default and split) -->
            <div style="padding: 10 10 10 10; width:fit-content;">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" id="cntryBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Country
                    </button>
                    
                    <ul class="dropdown-menu" id="countrySelected" style="height: 200px; overflow-y:auto; width:300px;">
                        @foreach($countries as $country)
                            <option class="dropdown-item" onclick="getCountry(this)" value="{{$country['country_name']}}">{{$country['country_name']}}</option>
                        @endforeach
                    </ul>
                </div>
                <div class="btn-group" style="margin-left: 32pt; margin-right:32pt;">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" id="stateBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        State
                    </button>
                    <ul class="dropdown-menu" id="stateSelected">
                    </ul>
                </div>
                <div class="btn-group" id="cty">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        City
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
<form action="">
     @csrf
    <input type="text" name="country" id="country" disabled hidden>
    <input type="text" name="state" id="state" disabled hidden>
    <input type="text" name="city" id="city" disabled hidden>
</form>

@stop
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function getCountry(select){
        document.getElementById('cntryBtn').innerHTML = select.value;
        document.getElementById('country').value = select.value;
        $.ajax({
            type: 'GET',
            url: '/states/'+select.value,
            data: '',
            dataType: 'json',
            success: function (data) {
                var dropdown = document.getElementById('stateSelected');
                if(dropdown.hasChildNodes){
                    dropdown.innerHTML = ''
                    document.getElementById('stateBtn').innerHTML = 'State';
                }
                for (let index = 0; index < data.length; index++) {
                    const element = data[index]['state_name'];
                    var option = document.createElement("option");
                    option.value = element;
                    option.text = element;
                    option.className = 'dropdown-item';
                    option.addEventListener("click", function(){
                        getState(element);
                    });
                    dropdown.appendChild(option);
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    };
    function getState(select){
        document.getElementById('stateBtn').innerHTML = select;
        document.getElementById('state').value = select;
    };
</script>