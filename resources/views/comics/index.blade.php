@extends('layouts.app')
@section('head')
I tuoi fumetti
@endsection

@section('content')
    <h1 class="text-center text-uppercase pb-3">Il tuo archivio</h1>
    <div class="row d-flex">
        @foreach ($comics as $comic)
            <div class="card col-3 d-flex p-2 ms_card mb-3">
                <img src="{{ $comic->thumb }}" class="card-img-top ms_card-img" alt="...">
                <div class="card-body">
                    <div class="ms_titles">
                        <h3 class="text-center">{{ $comic->title }}</h3>
                        <h5 class="text-center">{{ $comic->series }}</h5>
                    </div>
                <p class="card-text ms_description">{{ $comic->description }}</p>
                <a href="{{ Route('comics.show', $comic->id) }}" class="btn btn-primary mb-3">Clicca qui per saperne di più</a>
                <a href="{{ Route('comics.edit', $comic->id) }}" class="btn btn-warning mb-5">Modifica questo fumetto</a>
            </div>
            </div>
            
        @endforeach
    </div>
@endsection