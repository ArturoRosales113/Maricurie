<?php

namespace Maricurie\Http\Controllers;

use Illuminate\Http\Request;

use Maricurie\Http\Requests;
use Maricurie\Http\Controllers\Controller;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('welcome');   //
    }
}
   