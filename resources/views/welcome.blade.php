<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel= "stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           <div class="container">
               <div class="jumbotron">
                   <h1>Ask A Question!</h1>
                   <p>
                       Ask any question you want to know about Laravel and will get answer for you!
                   </p>
                   <p>
                       <a href="#" class="btn btn-primary btn-lg" role="button">Ask Now</a>
                   </p>
               </div>
               <h2>Recent Questions:</h2>
               <div>
        </div>
    </body>
</html>
