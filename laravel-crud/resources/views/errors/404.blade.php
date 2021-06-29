@extends('layout.main');

@section('content')

  <div class="container text-center pt-6">
    <h1>404 error</h1>
    <p>{{$exception->getMessage()}}</p>
  </div>

@endsection

{{-- Serve per intercettare un errore con abort in questo caso richiamato nella funzione show e stampa il messaggio errore che abbiamo salvato --}}