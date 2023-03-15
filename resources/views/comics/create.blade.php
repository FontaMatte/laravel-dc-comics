@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Aggiungi Fumeto</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="inserisci il titolo" required maxlength="64">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="inserisci descrizione" maxlength="1024"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="inserisci il prezzo" required>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" required maxlength="32">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di Vendita</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" id="type" name="type">
                        <option selected>Seleziona un tipo</option>
                        <option value="comic">Comic Book</option>
                        <option value="graphic">Graphic Novel</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">
                    Aggiungi
                </button>
            </form>
        </div>
    </div>
@endsection