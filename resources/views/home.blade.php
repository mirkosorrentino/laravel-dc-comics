@extends('layouts.app')

@section('content')
    Home
    <a href="/comics">Clicca qui per vedere la lista di tutti i fumetti</a>
    <a href="{{ route('comics.create') }}">Aggiungi il tuo fumetto</a>
@endsection