@extends('layout.main');

@section('content')
  <section class="container">
    
    <h1>I nostri fumetti</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>title</th>
          <th>type</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
            <tr>
              <td>{{$comic->id}}</td>
              <td>{{$comic->title}}</td>
              <td>{{$comic->type}}</td>
              <td>
                {{-- Il bottone deve puntare alla rotta dello show() del ComicController e gli passiamo il nome della variabile del fumetto e in automatico passa l'id che vogliamo vedere--}}
                <a href="{{route('comics.show',$comic)}}" class="btn btn-primary">SHOW</a>
              </td>
              <td>Edit</td>
              <td>Delete</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </section>  

@endsection