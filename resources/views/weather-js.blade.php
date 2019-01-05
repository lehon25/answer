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
                                <li>Lng: @{{ googleAdress.lng }}</li>
                            <hr />
                            <p>
                                @{{ darksky.summary }}
                            </p>

                            <ul>
                            <li>Current Temp: @{{ darksky.temp }}</li>
                            <li>Feels Like: @{{ darksky.feelsLikeTemp }}</li>
                            <li>Wind Speed: @{{ darksky.windSpeed }}mph</li>
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
            },
            darksky:{
                summary:'',
                temp:'',
                feelsLikeTemp:'',
                windSpeed:''
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
                    const darkskyApi = '{{ env('DARKSKY_API') }}',
                    const corsAnyWhere =  'https://cors-anywhere.herokuapp.com/';
                    const url = `${corsAnyWhere}https://api.darksky.net/forecast/${darksyApi}/${res.geometry.location.lat}.${res.geometry.location.lng}`
                    return axios.get()
                }).then(function(response){
                    let res2=response.data;
                    vm.darksky.summary = res2.currently.summary;
                    vm.darksky.temp=res2.currently.temperature;
                    vm.darksky.feelsLikeTemp = res2.currently.apparentTemperature;
                    vm.darksky.windSpeed= res2.currently.windSpeed;
                })
            }
        },
    })
</script>
@endsection
