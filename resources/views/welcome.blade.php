@extends('admin.template.main')
@section('title')
EpicCinema


@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>EpicCinema</title> --}}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body style="background-color: #313131">
        <nav class="navbar navbar-light " style="background-color: #AD1812;">
            <h1 style="color:black;">EpicCinema</h1>
            <div class="top-right links">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a class="m-5" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </nav>
        <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">EpicCinema</h1>
            <p class="lead">En EpicCinema encontraras traillers de excelentes peliculas del cine de Hollywood</p>
            <hr class="my-4">
            <p>Adelante, registrate y veras todo nuestro contenido de Traillers</p>
            <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Registrate</a>
        </div>
    </div>
    </body>
</html>
