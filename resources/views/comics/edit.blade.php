@extends('layouts.app')

@section('title', 'Comics - Edit')

@section('main-content')
    <section class="mt-5 py-1">
        <div class="container bg-dark py-4">
            <h1 class="title text-center text-danger">Welcome to my Comics Edit!</h1>
        </div>
    </section>


    <section class="mb-5 py-1">
        <div class="bg-light container py-4">
            <p class="title text-center text-dark">Modifica il Fumetto!</p>
        </div>

        <div class="container">
            <form action="{{route('comics.update', $comic)}}" method="POST">


                {{-- Qui va inserito il Cross Site Request Forgering --}}
                @csrf

                {{-- Qui bisogna specificare il metodo della chiamata --}}
                @method('PUT')

                <div class="mt-3">
                    <label for="title" class="form-label text-light">Titolo:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="" value="{{$comic->title}}">
                </div>

                <div class="my-3">
                    <label for="price" class="form-label text-light">Prezzo:</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="" value="{{$comic->price}}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label text-light">Tipo:</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="" value="{{$comic->type}}">
                </div>

                <div class="my-3">
                    <label for="series" class="form-label text-light">Serie:</label>
                    <input type="text" name="series" class="form-control" id="series" placeholder="" value="{{$comic->series}}">
                </div>

                <div class="my-3">
                    <label for="sale_date" class="form-label text-light">Data di Pubblicazione:</label>
                    <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="" value="{{$comic->sale_date}}">
                </div>

                <div class="my-3">
                    <label for="thumb" class="form-label text-light">Immagine:</label>
                    <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Inserisci il link dell'immagine..." value="{{$comic->thumb}}">
                </div>

                <div class="my-3">
                    <label for="description" class="form-label text-light">Descrizione:</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Inserisci una descrizione...">{{$comic->description}}</textarea>
                </div>
                
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </section>
@endsection