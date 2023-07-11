@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Persona</h5>
    <div class="card-body">
      
      <p class="card-text">
          <form action="{{route('persona.store')}}" method="POST">
           @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Apellido Paterno</label>
            <input type="text" name="apellido_pat" class="form-control" required>
            <label for="">Apellido Materno</label>
            <input type="text" name="apellido_mat" class="form-control" required>
            <label for="">Telefono</label>
            <input type="text" name="telefono" class="form-control" required>
            <label for="">Fecha nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            {{-- <label for="">creat cate</label>
            <input type="date" name="created_at" class="form-control" required>
            <label for="">Fecha sda</label>
            <input type="date" name="updated_at" class="form-control" required> --}}
            <br>
            <button  class="btn btn-primary" >Agregar</button>
            <a href="{{route('Persona.index')}}" class="btn btn-danger">Regresar</a>
          </form>
      </p>
   
    </div>
  </div>
@endsection