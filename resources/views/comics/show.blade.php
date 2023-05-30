@extends('layouts.app')

@section('head')
{{ $comic->title }}
@endsection

@section('content')
    <h1 class="text-center text-uppercase">{{ $comic->title }}</h1>
    <h3 class="text-center">{{ $comic->series }}</h3>

    <div class="text-center">
        <img src="{{ $comic->thumb }}" alt="" class="ms_show-img">
    </div>
    <table class="table">
        <tbody>
          <tr>
            <th scope="row" colspan="2">Titolo</th>
            <td colspan="2">{{ $comic->title }}</td>
            
          </tr>
          <tr>
            <th scope="row" colspan="2">Serie</th>
            <td colspan="2">{{ $comic->series }}</td>
            
          </tr>
          <tr>
            <th scope="row" colspan="2">Descrizione</th>
            <td colspan="2">{{ $comic->description }}</td>
          </tr>
          <tr>
            <th scope="row" colspan="2">Tipo di fumetto</th>
            <td colspan="2">{{ $comic->type }}</td>
          </tr>
          <tr>
            <th scope="row" colspan="2">Prezzo</th>
            <td colspan="2">{{ $comic->price }}</td>
          </tr>
          <tr>
            <th scope="row" colspan="2">Data di uscita</th>
            <td colspan="2">{{ $comic->sale_date }}</td>
          </tr>
        </tbody>
      </table>
@endsection