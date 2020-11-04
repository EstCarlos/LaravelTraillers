@extends('admin.template.main')

@section('title')
Agregar Traillers
@endsection

<body style="background-color: #313131">
    

<nav class="navbar navbar-light " style="background-color: #991111;">
    <h1 style="color:black;">EpicCinema</h1>
  </nav>

<div class="container shadow-lg p-3 mb-5 mt-5 bg-white rounded">

    <a class="btn btn-info mt-2" href="{{ url('trailers') }}">Regresar</a>

    <h3 class="mt-5">Agregar Traillers</h3>

    <form action="{{url('/trailers')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="Nombre">{{'Nombre'}}</label>
            <input class="form-control" type="text" name="Nombre" id="Nombre" value="">
        </div>

        <div class="form-group">
            <label for="">{{'Descripcion'}}</label>
            <input class="form-control" type="text" name="Descripcion" id="Descripcion" value="">
        </div>

        <div class="form-group">
            <label for="URL">{{'URL'}}</label>
            <input class="form-control" type="text" name="URL" id="URL" value="">
        </div>

        <div class="form-group">
            <label for="Director">{{'Director'}}</label>
            <input class="form-control" type="text" name="Director" id="Director" value="">
        </div>

        <div class="form-group">
            <label for="Points">{{'Points'}}</label>
            <input class="form-control" type="text" name="Points" id="Points" value="">
        </div>

        <div class="form-group">
            <label for="Foto">{{'Foto'}}</label>
            <input class="form-control-file" type="file" name="Foto" id="Foto" value="">
        </div>
        
        <div class="form-group">
            <input class="btn btn-outline-success" type="submit" value="Agregar">
            
        </div>
    
    </form>
</div>
</body>
