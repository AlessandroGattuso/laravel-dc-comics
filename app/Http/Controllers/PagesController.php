<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //Show all comics in the home page
    public function index(){
        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');
        
        return view('home', compact('images','menu','socials'));
    }
}
