@extends('layouts.app')
@section('show_comic')
<main>
  <div class="comic-card-container">
    <div class="row gap-1 d-flex">
        <div class="col-4">
          <img src="{{$comic['thumb']}}" onerror="this.onerror=null;this.src='https://picsum.photos/200/300';">
        </div>
        <div class="col-7 d-flex flex-column gap-4">
          <h2>{{$comic['title']}}</h2>
          <p>{{$comic['description']}}</p>
          <div>
            <span>Series: </span><span class="series">{{$comic['series']}}</span>
          </div>
          <p>{{\Carbon\Carbon::createFromFormat('Y-m-d', $comic->sale_date)->format('d/m/Y');}}</p>
          <span class="price">{{$comic['price']}}€</span>
          <div class="d-flex gap-4">
            <a href="{{route('comics.edit', ['comic' => $comic->id])}}">
              <button class="btn btn-warning">Modifica</button>
            </a>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
          </div>
        </div>
    </div>
  </div>
  @include('comics_partials.delete_modal')
</main>
@endsection