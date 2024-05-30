@extends('layouts.app')

@section('title', 'Comics - Show')

@section('main-content')
<section class="mt-5 py-1">
    <div class="container bg-dark py-4">
        <h1 class="title text-center text-warning">Welcome to my Comics Show!</h1>
    </div>
</section>


<section class="mb-5 py-1">
    <h3 class="title text-center text-warning">Ecco il fumetto che Cercavi!</h3>
    <div class="bg-light container py-4 d-flex justify-content-center">
        <div class="card my-card py-4">
            <img src="{{$comic->thumb}}" class="card-img-top align-self-center" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text">{{$comic->series}}</p>
                <p class="card-text">{{$comic->price}} $</p>
                <p class="card-text">{{$comic->sale_date}}</p>
                <p class="card-text">{{$comic->type}}</p>
                <p class="card-text">{{$comic->description}}</p>
            </div>
            <div class="card-footer my-card-footer">
                <h4 class="btn btn-primary"><a class="d-inline-block w-100" href="{{route('comics.edit', $comic)}}">Modifica</a></h4>
                <form class="comic-delete-form" action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-link link-danger">Delete</button>

                    <div class="my-modal">
                        <h4 class="text-center">Vuoi Eliminare il Fumetto?</h4>
                        <div class="my-modal__box">
                            <p class="btn btn-danger my-modal-yes">Sì</p>
                            <p class="btn btn-success my-modal-no">No</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection