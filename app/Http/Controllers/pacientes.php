<?php

namespace Maricurie\Http\Controllers;

use Illuminate\Http\Request;

use Maricurie\Http\Requests;
use Maricurie\Http\Controllers\Controller;
use Maricurie\Paciente;

class Pacientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
    return view('admin.dpacientes')
    ->with('pacientes',$pacientes);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ppacientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Maricurie\Paciente::create([
        'nombre' => $request['nombre'],
        'apellido' => $request['apellido'],
        'telefono' => $request['telefono'],
        'email' => $request['email'],
        'password' => bcrypt($request['password']),
        ]);

        $pacientes = Paciente::all();
        return view('admin.dpacientes')
        ->with('pacientes',$pacientes);
         //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $paciente = Paciente::find($id);

        return view('admin.epaciente')
            ->with('paciente',$paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
