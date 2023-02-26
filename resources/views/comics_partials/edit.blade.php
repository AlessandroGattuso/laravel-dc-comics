@extends('layouts.app')
@section('edit_comic')
    <main class="h-100">
        <div class="container flex flex-jc-center flex-align-center h-100 w-100 py-2">
            <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nome Fumetto</label>
                    <input type="text" name="title" class="form-control" value="{{old('title') ?? $comic->title}}">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex gap-1">
                    <div class="mb-3">
                        <label class="form-label">Series</label>
                        <input type="text" name="series" class="form-control"  value="{{old('series') ?? $comic->series}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" value="{{old('type') ?? $comic->type}}">
                    </div>
                </div>
                <div class="flex gap-1">
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" value="{{old('priceb') ?? $comic->price}}">
                        @error('price')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data di rilascio</label>
                        <input type="text" name="sale_date" class="form-control" value="{{old('sale_date') ?? $comic->sale_date}}">
                        @error('sale_date')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="text" name="thumb" class="form-control" value="{{old('thumb') ?? $comic->thumb}}">
                    @error('thumb')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea type="textarea" name="description" class="form-control" rows="10">{{old('description') ?? $comic->description}}</textarea>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-jc-center">
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </div>
            </form>
        </div>
    </main>
@endsection