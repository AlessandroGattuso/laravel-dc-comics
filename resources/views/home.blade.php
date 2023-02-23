@extends('layouts.app')
@section('home')
    <main class="h-100">
        <div class="container flex flex-jc-center flex-align-center h-100 w-100">
          <a href="{{route('comics.index')}}">
            <button>Vedi tutti i comics</button>
          </a>
        </div>
    </main>
@endsection
