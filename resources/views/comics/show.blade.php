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
        </div>
    </div>
</section>
@endsection