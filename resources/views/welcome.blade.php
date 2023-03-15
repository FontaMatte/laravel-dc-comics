@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">

                <div class="cards-container">
                    @foreach ($comics as $comic)        
                    <div class="card">
                      <div> 
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                      </div>
                      <h4 class="bg-dark">
                          {{ $comic->series }}
                      </h4>
                      <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                          Vedi dettagli
                      </a>
                    </div>
                    @endforeach

                </div>
                <a href="{{ route('comics.index') }}" class="btn btn-primary mb-3">
                    Vedi tutti i fumetti
                </a>
            </div>
        </div>
    </div>
@endsection


