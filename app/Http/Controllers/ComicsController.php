<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

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
        return view('comics_partials.add', compact('images','menu','socials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$this->validation($request->all());
        $newComic = new Comic();

        // $newComic->title = $input['title'];
        // $newComic->description = $input['description'];
        // $newComic->thumb = $input['thumb'];
        // $newComic->series = $input['series'];
        // $newComic->type = $input['type'];
        // $newComic->price = $input['price'];
        // $newComic->sale_date = $input['sale_date'];

        $newComic->fill($input);

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
        $comic = Comic::findOrFail($id);

        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');
        
        return view('comics_partials.edit', compact('comic','menu','images','socials'));
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
        $updateForm = $this->validation($request->all());
        $updateComic = Comic::findOrFail($id);

        $updateComic->update($updateForm);
        return redirect()->route('comics.show',['comic' => $updateComic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');
        
        return redirect()->route('comics.index', compact('menu','images','socials'));
    }

    /**
     * Validate inputs data
     *
     * @param strings array $input
     * @return validator
     */
    private function validation($input){
        $validator = Validator::make($input,[
            'title' => 'required|max:50',
            'series' => 'nullable',
            'type' => 'nullable',
            'price' => 'required',
            'sale_date' => 'nullable',
            'thumb' => 'required || max:300',
            'description' => 'required',
        ],
        [
            'title.required' => "Devi inserire il titolo",
            'title.max' => "Il titolo non deve superare :max caratteri",
            'price.required' => "Devi inserire il prezzo",
            'thumb.required' => "Devi inserire il path dell'immagine",
            'thumb.max' => "Il path dell'immagine non deve surperare :max caratteri",
            'description.required' => 'Devi inserire la descrizione',

        ])->validate();
        return $validator;
    }
}
