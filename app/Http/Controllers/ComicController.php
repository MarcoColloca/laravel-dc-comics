<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }


    public function show(Comic $comic){


        dump('Funziona');

        return view('comics.show', compact('comic'));

    }


    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request){

        // Recupero  i parametri che arrivano dal form
        $form_data = $request->all();


        /* 
         |------------------------------------------------------------------------------------
         | Nel caso non dovessi popolare variabili e volessi fare tutto con un unico comando, 
         | potrei utilizzare il metodo statico create che in automatico, crea l'istanza, 
         | la popola e la salva. Ricordando di andare ad assegnare poi le Model alla variabile
         | protected $fillable un Array contenente i nomi delle variabili da popolare.
         | ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓
         |  $new_comic = Comic::create($form_data);
         | ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑
         |------------------------------------------------------------------------------------
        */




        // Creo una nuova di Comic
        $new_comic = new Comic();


        // Popolo l'istanza con i dati che sono arrivati dal form
        $new_comic->title = $form_data['title'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        
        // Popolo le variabili che non ricevo dal Form.
        $new_comic->description = null;
        $new_comic->thumb = null;


        // Salvo l'istanza con il metodo ->save()
        $new_comic->save();

        //dump($form_data);

        // Reindirizzo l'utente che ha mandato il form alla pagina che voglio.
        return redirect()->route('comics.show', $new_comic);
    }



    public function edit(Comic $comic){

        return view('comics.edit', compact('comic'));

    }


    public function update(Request $request, Comic $comic){

        /* 
         |------------------------------------------------------------------------------------
         | Come per il metodo store, se andiamo a settare la variabile protected $fillable 
         | all'interno del Metodo Comic, possiamo eseguire l'operazione di riempimento e 
         | salvataggio contemporaneamente, questa volta utilizzando il metodo update
         | ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓
         |  $comic->update($form_data);
         | ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑ ↑
         |------------------------------------------------------------------------------------
        */


        // Recupero i parametri che arrivano dal form
        $form_data = $request->all();

        // Modifico i dati all'interno della nostra istanza con i dati che derivano dal form
        $comic->fill($form_data);

        // Salvo i dati 
        $comic->save();
        //dd($comic);

        return redirect()->route('comics.show', $comic);
    }
}
