@extends('layouts.app')
@section('add_comic')
    <main class="h-100">
        <div class="container flex flex-jc-center flex-align-center h-100 w-100">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome Fumetto</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" name="thumb" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Series</label>
                    <input type="text" name="series" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <input type="text" name="type" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data di rilascio</label>
                    <input type="text" name="sale_date" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <input type="textarea" name="description" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection