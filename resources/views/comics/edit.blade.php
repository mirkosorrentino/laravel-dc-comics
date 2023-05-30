@extends('layouts.app')

@section('head')
    Modifica il tuo fumetto
@endsection

@section('content')
<div class="container">

    <h2>Modifica il fumetto: {{ $comic->title }}</h2>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="type" class="form-label">Tipo di fumetto:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>

        
        <div class="mb-3">
            <label for="series" class="form-label">Edizione:</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <input type="textarea" class="form-control" id="description" name="description" value="{{ $comic->description }}">
        </div>
        
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine:</label>
            <input type="text" class="form-control" id="thumb" name="thumb"  value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>
@endsection