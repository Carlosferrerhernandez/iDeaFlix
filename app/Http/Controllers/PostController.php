<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //

        $data = Post::all();

        return view('posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        /**
        * Crear un nuevo objeto utilizando el modelo acceso
        */

        $post = new Post();

        $post->name = $request->name;
        $post->description = $request->description;
        $post->url = $request->url;
        $post->category_id = $request->category_id;
        
        if($post->save()) {
            alert()->success('Success!', '')->autoClose(10000)->showCloseButton('aria-label');

            return Redirect('home');
        }

        else {
            alert()->error('Error', '')->autoClose(10000)->showCloseButton('aria-label');

            return redirect('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //

        /*
        *   Consulta de accesos
        */

        $post = Post::findOrFail($post);

        /*dd($accesos);*/

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        //

        $post = Post::findOrFail($post);

        $categories = Category::all();

        /*dd($post);*/

        return view('posts.edit')->with(['post'=>$post, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        //

        /*
        * Obtenemos el id del acceso y actualizamos el registro
        */

        $post = Post::find($post);

        $post->name = $request->name;
        $post->description = $request->description;
        $post->url = $request->url;
        $post->category_id = $request->category_id;
        
        if($post->save()) {
            alert()->success('Success update!', '')->autoClose(10000)->showCloseButton('aria-label');

            return Redirect('home');
        }

        else {
            alert()->error('Error update', '')->autoClose(10000)->showCloseButton('aria-label');

            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        //

        Post::destroy($post);

        alert()->success('Successful elimination', '')->autoClose(10000)->showCloseButton('aria-label');

        return Redirect::to('home');
    }
}
