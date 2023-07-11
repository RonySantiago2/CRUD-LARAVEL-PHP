@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar un nuevo registro')

@section('contenido')

<div class="card">
    <h5 class="card-header">Elimiar Persona</h5>
    <div class="card-body">
      
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
           Estas seguro de eliminar!

           <table class="table table-sm table-hover table-bordered" >
            <thead>
                <td>nombre</td>
                <td>apellido-pat</td>
                <td>apellido-mat</td>
                <td>telefono</td>
                <td>fecha-naciemiento</td>
               
            </thead>
            <tbody>

             
                    
              


                <tr>
                    <td>{{$persona->nombre}}  </td>
                    <td>{{$persona->apellido_pat}}</td>
                    <td>{{$persona->apellido_mat}}</td>
                    <td>{{$persona->telefono}}</td>
                    <td>{{$persona->fecha_nacimiento}}</td>
                    <td></td>
                </tr>
             
            </tbody>
        </table>
        <hr>
        <form action="{{route('persona.destroy',$persona->id)}}" method="post">
          @csrf
          @method('DELETE')
            <a href="{{route('Persona.index')}}" class="btn btn-info">REGRESAR</a>
            
            <button class="btn btn-danger">Eliminar</button>
        </form>
          </div>
      </p>
   
    </div>
  </div>
@endsection