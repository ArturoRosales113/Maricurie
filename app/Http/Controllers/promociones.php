<?php

namespace Maricurie\Http\Controllers;

use Illuminate\Http\Request;
use Maricurie\Http\Requests;
use Maricurie\Http\Controllers\Controller;
use Maricurie\Promocion;

class promociones extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
  {
    $promos = Promocion::all();
    return view('admin.dpromociones')
    ->with('promos',$promos);
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.ppromociones'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       \Maricurie\Promocion::create([

        'titulo' => $request['titulo'],
        'descripcion' => $request['descripcion'], 
        'path' => $request['path'],
        'iniciovigencia'=> $request['iniciovigencia'],
        'terminovigencia'=> $request['terminovigencia'],
        ]);

        $promos = Promocion::all();
        return view('admin.dpromociones')
        ->with('promos',$promos);
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
         $promocion = Blog::find($id);

        return view('admin.epromocion')
            ->with('promocion',$promocion);//
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

