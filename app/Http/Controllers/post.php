<?php

namespace Maricurie\Http\Controllers;

use Illuminate\Http\Request;
use Maricurie\Http\Requests;
use Maricurie\Http\Controllers\Controller;
use Maricurie\Blog;

class Post extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $posts = Blog::all();
    return view('admin.dpost')
    ->with('posts',$posts);//
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.ppost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Maricurie\Blog::create([
        'titulo' => $request['titulo'],
        'path' => $request['path'],
        'texto' => $request['texto'],
        'tags' => $request['tags'],
        ]);

        $posts = Blog::all();
        return view('admin.dpost')
        ->with('posts',$posts);
         // //
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
        $post = Blog::find($id);

        return view('admin.epost')
            ->with('post',$post);
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
