@extends('layouts.app')

@section('title', 'Comics - Show')

@section('main-content')
    <section class="mt-5 py-1">
        <div class="container bg-dark py-4">
            <h1 class="title text-center text-danger">Welcome to my Comics Create!</h1>
        </div>
    </section>


    <section class="mb-5 py-1">
        <div class="bg-light container py-4">
            <p class="title text-center text-dark">Qui mostreremo il form per creare il nuovo Fumetto!</p>
        </div>

        <div class="container">
            <form action="{{route('comics.store')}}" method="POST">

                {{-- Qui va inserito il Cross Site Request Forgering --}}
                @csrf

                <div class="mt-3">
                    <label for="title" class="form-label text-light">Città</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Batman: Returns">
                </div>

                <div class="my-3">
                    <label for="price" class="form-label text-light">Indirizzo</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="19.99">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label text-light">Tipologia</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="comic book">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection