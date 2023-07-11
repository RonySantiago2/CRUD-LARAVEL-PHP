<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller

{

    public function personas1(){
        $datos = Persona::all();
       return $datos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $datos = Persona::all();
       return view('welcome',compact('datos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $persona = new Persona();
     $persona->nombre = $request->post('nombre');
     $persona->apellido_pat = $request->post('apellido_pat');
     $persona->apellido_mat = $request->post('apellido_mat');
     $persona->telefono = $request->post('telefono');
     $persona->fecha_nacimiento = $request->post('fecha_nacimiento');
    //  $persona->created_at = $request->post('created_at');
    //  $persona->updated_at = $request->post('updated_at');
     $persona->save();

    return redirect()->route('Persona.index')->with("success","Agregado con exito");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);     
        return view('eliminar', compact('persona'));

    return view('eliminar');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona = Persona::find($id);     
        return view('actualizar', compact('persona'));
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $persona = Persona::find($id);
        $persona->nombre = $request->post('nombre');
     $persona->apellido_pat = $request->post('apellido_pat');
     $persona->apellido_mat = $request->post('apellido_mat');
     $persona->telefono = $request->post('telefono');
     $persona->fecha_nacimiento = $request->post('fecha_nacimiento');
    //  $persona->created_at = $request->post('created_at');
    //  $persona->updated_at = $request->post('updated_at');
     $persona->save();

    return redirect()->route('Persona.index')->with("success","Actualizado  con exito");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $persona = Persona::find($id);
      $persona-> delete();
      
      return redirect()->route('Persona.index')->with("success","Eliminado  con exito");
    }
}
