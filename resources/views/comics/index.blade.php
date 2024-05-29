@extends('layouts.app')

@section('title', 'Comics - Index')

@section('main-content')
<section class="mt-5 py-1">
    <div class="container bg-dark py-4">
        <h1 class="title text-center text-warning">Welcome to my Comics Index!</h1>
    </div>
</section>


<section class="mb-5 py-1">
    <div class="container mt-4">
        <div class="row g-5">
            @foreach ($comics as $comic)                
                <div class="col-4">
                    <div class="card">
                        <img src="{{$comic->thumb}}" class="card-img-top img-micro align-self-center p-1" alt="...">
                        <div class="card-body my-card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <p class="card-text">{{$comic->series}}</p>
                            <p class="card-text">{{$comic->price}} $</p>
                            <p class="card-text">{{$comic->sale_date}}</p>
                            <p class="card-text">{{$comic->type}}</p>

                            <a href="{{route('comics.show', $comic)}}" class="btn btn-warning text-danger border-danger">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection