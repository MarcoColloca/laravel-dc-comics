<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(){


        return view('comics.index');
    }


    public function show(Comic $comic){


        dump('Funziona');

        return view('comics.show', compact('comic'));

    }


    public function create()
    {
        return view('comics.create');
    }


    public function store(){
        dump('Metodo Store');
    }
}
