<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get categories

        $data = Category::all();

        /*dd($data);*/

        return view('categories.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
        * Crear un nuevo objeto utilizando el modelo acceso
        */

        $category = new Category();

        $category->description = $request->description;
        
        if($category->save()) {
            alert()->success('Se ha registrado un acceso satisfactoriamente!', '')->autoClose(10000)->showCloseButton('aria-label');

            return Redirect('home');
        }

        else {
            alert()->error('No se logro registrar el acceso satisfactoriamente', '')->autoClose(10000)->showCloseButton('aria-label');

            return redirect('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        /*
        *   Get category
        */

        $posts = Category::find($category)->posts;

        $category = Category::findOrFail($category);

        /*dd($category);*/

        return view('categories.show', compact('category', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $category = Category::findOrFail($category);

        /*dd($category);*/

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        //

        $category = Category::find($category);

        $category->description = $request->description;
        
        if($category->save()) {
            alert()->success('Se ha registrado un acceso satisfactoriamente!', '')->autoClose(10000)->showCloseButton('aria-label');

            return Redirect('home');
        }

        else {
            alert()->error('No se logro registrar el acceso satisfactoriamente', '')->autoClose(10000)->showCloseButton('aria-label');

            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        //

        Category::destroy($category);

        alert()->success('Se elimino correctamente', '')->autoClose(10000)->showCloseButton('aria-label');

        return Redirect::to('home');
    }
}
