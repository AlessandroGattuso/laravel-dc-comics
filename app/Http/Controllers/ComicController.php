<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{

    //Show all comics in the home page
    public function index(){
        $data = Comic::all();
        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');

        return view('home', compact('data','images','menu','socials'));
    }

    //Get the single by slug's comic attribute in the single comic page
    public function getComic($slug){
        $comic = (Comic::where('slug', $slug)->get())[0];

        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');

        return view('comic', compact('comic','menu','images','socials'));
    } 
}
