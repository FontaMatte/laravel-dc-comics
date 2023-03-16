@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="card-title">
                    {{ $comic->title }}
                </h1>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p>
                            {{ $comic->title }}
                        </p>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                            Modifica
                        </a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf

                            {{-- aggiungo il medoto --}}
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                Elimina
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-3">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna indietro
            </a>
        </div>
    </div>
@endsection