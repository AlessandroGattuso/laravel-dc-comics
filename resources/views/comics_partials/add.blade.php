@extends('layouts.app')
@section('add_comic')
    <main class="h-100">
        <div class="container flex flex-jc-center flex-align-center h-100 w-100 py-2">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome Fumetto</label>
                    <input type="text" name="title" class="form-control">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex gap-1">
                    <div class="mb-3">
                        <label class="form-label">Series</label>
                        <input type="text" name="series" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control">
                    </div>
                </div>
                <div class="flex gap-1">
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control">
                        @error('price')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data di rilascio</label>
                        <input type="text" name="sale_date" class="form-control">
                        @error('sale_date')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" name="thumb" class="form-control">
                    @error('thumb')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea type="textarea" name="description" class="form-control"></textarea>
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-jc-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
@endsection