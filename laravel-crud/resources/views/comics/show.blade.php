@extends('layout.main');

@section('content')
       <section class="container">
         <div class="row">
           <div class="col-md-6">
             <img class="image-fluid" style="width:400px;" src="{{$comics->thumb}}" alt="{{$comics->title}}" >
           </div>
           <div class="col-md-5 col-offset-1">
             <h1>{{$comics->title}}</h1>
             {{-- I punti esclamativi servono per leggere i tag html scritti nel testo --}}
             <h3>{!! $comics->description !!}</h3>
             <a class="mt-3" href="{{route('comics.index')}}"><< BACK</a>
           </div>
         </div>
       </section>
@endsection