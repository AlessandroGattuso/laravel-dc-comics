@extends('layouts.app')
@section('home')
    <main>
        <div class="container-fluid jumbotron"></div>
        <div class="container-fluid comic-container">
            <div class="container flex flex-align-center text-white h-100">
            <div class="label">
                CURRENT SERIES
            </div>
            <div class="add-comic">
                <a href="{{route('comics.create')}}">
                    <button>Aggiungi</button>
                </a>
            </div>
            <div class="grid-card">
                @foreach($data as $comic)
                <div class="myCard">
                    <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                        <img src="{{$comic['thumb']}}" alt="Image not found">
                        <p class="title">{{ $comic['series'] }}</p>
                    </a>
                </div>
                @endforeach
            </div>
            </div>
            <div class="container flex flex-jc-center">
                <button>LOAD MORE</button>
            </div>
        </div>
        <div class="container-fluid shop-container">
            <div class="container flex flex-align-center text-white h-100">
            @foreach($images as $image)
                <div class="flex flex-align-center cursor-pointer shop-item">
                <img src="{{Vite::asset('resources/images/'.$image['file'])}}" alt="Image not found">
                <span>{{ $image['label'] }}</span>
                </div>
            @endforeach
            </div>
        </div>
    </main>
@endsection
