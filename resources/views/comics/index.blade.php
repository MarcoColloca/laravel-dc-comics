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
                            <h4 class="text-center">
                                <a href="{{route('comics.show', $comic)}}" class="btn btn-warning text-danger border-danger">Details</a>
                            </h4>
                        </div>
                        <div class="card-footer">                            
                            <h4 class="btn btn-primary"><a class="d-inline-block w-100" href="{{route('comics.edit', $comic)}}">Edit</a></h4>
                            <form action="{{route('comics.destroy', $comic)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-link link-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection