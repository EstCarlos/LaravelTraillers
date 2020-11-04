{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                        user dashboard
                    {{ __('You are logged in!') }} como un usuario 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('admin.template.main')
@section('title')
Traillers


@endsection
<body style="background-color: #313131">


<nav class="navbar navbar-light " style="background-color: #AD1812;">
    {{-- <a class="display-4 text-dark">EpicCinema</a> --}}
    <h1 style="color:black;">EpicCinema</h1>
    
    <div>
        <a class="m-5" href="{{ url('/welcome') }}">Inicio </a>
      @if (session('status'))
          <div role="alert">
              {{ session('status') }}
          </div>
      @endif
        <a href="{{ url('/trailers/form') }}">Invitado</a>
      {{-- <h6>Administrador</h6> --}}
  </div>
  </nav>


    @if (Session::has('Mensaje')){{
        Session::get('Mensaje')
    }}
    @endif



<div class="container">
    {{-- <a class="btn btn-primary btn-lg btn-block mt-2" href="{{ url('trailers/create') }}">Agregar Trailer</a> --}}
  <div class="row justify-content-center">
    
    @foreach ($trailers as $trailer)
    
<div class="col-md-4">
  <div class="card text-center mb-3  shadow p-3 mb-5 bg-transparent text-white rounded" style="width: 20rem; margin-top:70px">
    
    <img src="{{ asset('storage').'/'. $trailer->Foto}}" class="card-img-top" alt="" width="200px">

    <div class="card-body">

      <h5 class="card-title">{{$trailer->Nombre}}</h5>
      <p class="card-text">{{$trailer->Descripcion}}</p>
      <P class="card-text"><b>Director:</b> {{$trailer->Director}}</P>
      <P class="card-text"><b>Puntuacion:</b> {{$trailer->Points}}</P>  

        <a href="{{$trailer->URL}}" class="btn btn-success" target="blank">Ver Trailer</a>
    </div>

    

    

  </div>

</div>

  @endforeach
</body>