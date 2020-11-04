
@extends('layouts.app')

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
                        
                    {{ __('You are logged in!') }} como invitado
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


    <a class="btn btn-primary btn-lg btn-block mt-2" href="{{ url('/user') }}">Volver a ver los trailers</a>
