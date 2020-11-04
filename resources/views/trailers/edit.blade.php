@extends('admin.template.main')

<body style="background-color: #313131">
    <nav class="navbar navbar-light " style="background-color: #991111;">
        <h1 style="color:black;">EpicCinema</h1>
      </nav>


<div class="container shadow p-3 mb-5 bg-white rounded">

    <a class="btn btn-info mt-2" href="{{ url('trailers') }}">Regresar</a>

    <h3 class="mt-5">Modificar Traillers</h3>

    <form action="{{ url('/trailers/'. $trail->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}

            <div class="form-group">
                <label for="Nombre">{{'Nombre'}}</label>
                <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{$trail->Nombre}}">
            </div>

            <div class="form-group">
                <label for="">{{'Descripcion'}}</label>
                <input class="form-control" type="text" name="Descripcion" id="Descripcion" value="{{$trail->Descripcion}}">
            </div>

            <div class="form-group">
                <label for="URL">{{'URL'}}</label>
                <input class="form-control" type="text" name="URL" id="URL" value="{{$trail->URL}}">
            </div>

            <div class="form-group">
                <label for="Director">{{'Director'}}</label>
                <input class="form-control" type="text" name="Director" id="Director" value="{{$trail->Director}}">
            </div>

            <div class="form-group">
                <label for="Points">{{'Points'}}</label>
                <input class="form-control" type="text" name="Points" id="Points" value="{{$trail->Points}}">
            </div>

            <div class="form-group">
                <label for="Foto">{{'Foto'}}</label><br>
                <img src="{{ asset('storage').'/'. $trail->Foto}}" alt="" width="200px"> 
                <br>
                <br>
                <input class="form-control-file" type="file" name="Foto" id="Foto" value="">
            </div>

            <div class="form-group">
                <input class="btn btn-outline-success" type="submit" value="Modificar">
            </div>

            

    </form>
</div>

</body>