@extends('layouts.app')

@section('content')
    @foreach ($comics as $comic)
        <a href="{{ Route('comics.show', $comic->id) }}">
            {{ $comic->series }}
        </a>
    @endforeach
@endsection