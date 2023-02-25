@extends('layouts.app')
@section('home')
    <main class="h-100 flex flex-jc-center flex-align-center">
      <a href="{{route('comics.index')}}">
        <button>Vedi tutti i comics</button>
      </a>       
    </main>
@endsection
