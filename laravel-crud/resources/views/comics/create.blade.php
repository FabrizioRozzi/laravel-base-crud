@extends('layout.main');

@section('content')

  <div class="container">
    <h1>Nuovo comics</h1>
    <div class="row col-8 offset-2">
      <form action="{{route('comics.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="mb-2 mt-5">
          <label for="title" class="form-label">Titolo comics</label>
          <input type="text" name="title" id="title" class="form-control">
        </div>
        
        <div class="mb-2 mt-5">
          <label for="description" class="form-label">Descrizione comics</label>
          <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="mb-2 mt-5">
          <label for="type" class="form-label">Tipo comics</label>
          <input type="text" name="type" id="type" class="form-control">
        </div>
        
        <div class="mb-2 mt-5">
          <label for="thumb" class="form-label">URL immagine comics</label>
          <input type="text" name="thumb" id="thumb" class="form-control">
        </div>
        
        <div class="mb-2 mt-5">
          <label for="price" class="form-label">Prezzo comics</label>
          <input type="text" name="price" id="price" class="form-control">
        </div>
        
        <div class="mb-2 mt-5">
          <label for="series" class="form-label">Serie comics</label>
          <input type="text" name="series" id="series" class="form-control">
        </div>
        
        <div class="mb-2 mt-5">
          <label for="sale_date" class="form-label">Data di uscita comics</label>
          <input type="text" name="sale_date" id="sale_date" class="form-control">
        </div>

        <button type="sumbit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </form>
    </div>
  </div>

@endsection
