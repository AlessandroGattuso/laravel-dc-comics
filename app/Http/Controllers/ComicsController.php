<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Comic::all();
        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');

        return view('comics_partials.index', compact('data','images','menu','socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');
        return view('comics_partials.add_comic', compact('images','menu','socials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $newComic = new Comic();
        
        $newComic->title = $inputs['title'];
        $newComic->description = $inputs['description'];
        $newComic->thumb = $inputs['thumb'];
        $newComic->series = $inputs['series'];
        $newComic->type = $inputs['type'];
        $newComic->price = $inputs['price'];
        $newComic->sale_date = $inputs['sale_date'];

        $newComic->save();
        return redirect()->route('comics.show',['comic' => $newComic-> id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');
        
        return view('comics_partials.show', compact('comic','menu','images','socials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
