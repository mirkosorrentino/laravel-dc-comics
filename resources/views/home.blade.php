@extends('layouts.app')

@section('head')
    Home
@endsection

@section('content')
    <h1 class="text-center text-uppercase pb-5">Il tuo archivio di fumetti</h1>
    <div class="ms_home-link text-center pb-4">
        <a href="/comics">Clicca qui per vedere la lista dei tuoi fumetti</a>
    </div>
    <div class="ms_home-link text-center">
        <a href="{{ route('comics.create') }}">Aggiungi un nuovo fumetto</a> 
    </div>
@endsection