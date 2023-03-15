@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">

                <div class="card">
                    <div class="card-body">
                        <h1 class="card-tutle">DC COMICS</h1>
                        <a href="{{ route('comics.index') }}" class="btn btn-primary">
                            Vedi tutti i fumetti
                        </a>
                    </div>
                </div>   

            </div>
        </div>
    </div>
@endsection
