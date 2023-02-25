@extends('layouts.app')
@section('show_comic')
<main>
  <div class="comic-card-container">
    <div class="row gap-1 d-flex">
        <div class="col-4">
          <img src="{{$comic['thumb']}}" alt="Image not found">
        </div>
        <div class="col-7 d-flex flex-column gap-2">
          <h2>{{$comic['title']}}</h2>
          <p>{{$comic['description']}}</p>
          <div>
            <span>Series: </span><span class="series">{{$comic['series']}}</span>
          </div>
          <span class="price">{{$comic['price']}}€</span>
          <div class="d-flex gap-4">
            <a href="{{route('comics.edit', ['comic' => $comic->id])}}">
              <button class="btn btn-warning">Edit</button>
            </a>
            <button class="btn btn-danger">Delete</button>
          </div>
        </div>
    </div>
  </div>
</main>
@endsection