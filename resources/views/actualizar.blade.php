@extends('layout/plantilla')

@section('tituloPagina', 'Actualizar  Persona')

@section('contenido')

<div class="card">
    <h5 class="card-header">Actualizar Persona</h5>
    <div class="card-body">
    
      <p class="card-text">
          <form action="{{route('persona.update',$persona->id)}}" method="POST">
            @csrf
            @method("PUT")
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required   value="{{$persona->nombre}}">
            <label for="">Apellido Paterno</label>
            <input type="text" name="apellido_pat" class="form-control" required  value="{{$persona->apellido_pat}}">
            <label for="">Apellido Materno</label>
            <input type="text" name="apellido_mat" class="form-control" required   value="{{$persona->apellido_mat}}">
           <label for="">Telefono</label>
            <input type="text" name="telefono" class="form-control" required   value="{{$persona->telefono}}">
            <label for="">Fecha nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required   value="{{$persona->fecha_nacimiento}}">
            <br>
            <button class="btn btn-warning" >Actualizar</button>
            <a href="{{route('Persona.index')}}" class="btn btn-danger">Regresar</a>
          </form>
      </p>
   
    </div>
  </div>
@endsection