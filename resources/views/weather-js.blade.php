@extends('template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Enter an Adress to get Weather</h1>
                <hr />
                <form>
                    {{ csrf_field() }}
                    <input type="text" name="location" style="margin: 20px 0;" class="form-control" placeholder="Enter a Zipcode or Address"/>
                    <button class= "btn btn-primary" style="width: 100%;">Get Weather</button>
                </form>

                    <div class="col-md-6 col-md-offset-3">
                            <h1>@{{ googleAdress.formatted }}</h1>
                            <hr />
                            <ul>
                                <li>Lat: @{{ googleAdress.lat }}</li>
                                <li>Lng: @{{ googleAdress/lng }}</li>
                            <hr />
                            <p>
                                Weather Summary
                            </p>

                            <ul>
                            <li>Current Temp: </li>
                            <li>Feels Like: Temp</li>
                            <li>Wind Speed: speed mph</li>
                            </ul>
                        </div>
        </div>
    </div>
@endsection
@section('scsripts')
<script>
    var app = new Vue({
        el:'#app',
        data: {
            step:1,
            userInput:'',
            googleAdress:{
                formatted:'',
                lat:'',
                lng:'',
            }
        },
        methods: {
            getWeather:function(){
                this.step=2;
                let vm = this;
                axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
                    params:{
                        address:vm.userInput
                    }
                }).then(function(response){
                    vm.res=response.data.results[0];
                    vm.googleAdress.formatted = vm.res.formatted_address;
                    vm.googleAdress.lat = res.geometry.location.lat;
                    vm.googleAdress.lng = res.geometry.location.lng;
                })
            }
        },
    })
</script>
@endsection
