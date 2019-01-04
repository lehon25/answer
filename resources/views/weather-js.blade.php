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
                            <h1>Formatted Address</h1>
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
</script>
@endsection
