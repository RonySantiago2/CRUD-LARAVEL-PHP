@extends('./layout/plantilla');


@section('tituloPagina','Crud con laravel 8')
@section('contenido')
<br>
<div class="card" style="margin-top: 200px">
    <div class="card-header">
     CRUD CON LARAVEL
    </div>
    <div class="card-body">
      <h5 class="card-title">LISTADO DE PERSONAS</h5>
      
      <p>
        <a href="{{route('persona.create')}}" class="btn btn-success">Crear Persona</a>
      </p>
      <hr>

      {{-- @php
        print_r($datos);   
      @endphp --}}

      <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <td>nombre</td>
                    <td>apellido-pat</td>
                    <td>apellido-mat</td>
                    <td>telefono</td>
                    <td>fecha-naciemiento</td>
                    <td>editar</td>
                    <td>eliminar</td>
                </thead>
                <tbody>

                    @foreach ($datos as $item)
                        
                  


                    <tr>
                        <td> {{$item->nombre}} </td>
                        <td>{{$item->apellido_pat}}</td>
                        <td>{{$item->apellido_mat}}</td>
                        <td>{{$item->telefono}}</td>
                        <td>{{$item->fecha_nacimiento}}</td>
                        <td><form action="{{route("persona.edit", $item->id)}}" method="get">
                        <button class="btn btn-warning btn-sm">
                            ACTUALIZAR
                        </button>    
                        </form></td>
                        <td><form action="{{route("persona.show", $item->id)}}" method="get">
                            <button class="btn btn-danger btn-sm">
                                ELIMINAR
                            </button>    
                            </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

   
@endsection