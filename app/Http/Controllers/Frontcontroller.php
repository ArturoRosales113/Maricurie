<?php

namespace Maricurie\Http\Controllers;

use Illuminate\Http\Request;

use Maricurie\Http\Requests;
use Maricurie\Http\Controllers\Controller;
use \Maricurie\Promocion;

class Frontcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $promos = Promocion::all();
    return view('usuario.index')
    ->with('promos',$promos);   
//
    }

    public function mariecurie()
    {
        return view('usuario.mariecurie');//
    }

    public function servicios()
    {
        return view('usuario.servicios');//
    }
    public function noticias()
    {
       return view('usuario.noticias'); //
    } 
    public function galeria()
    {
       return view('usuario.galeria'); //
    } 
    public function contacto()
    {
        return view('usuario.contacto'); //
    } 
     public function admin()
    {
       return view('admin.admin'); //
    } 
    public function promos()
    {
        $promos = Promocion::all();
        return view('usuario.promociones')
        ->with('promos',$promos);//
    }
}   