@extends('layouts.app')

@section('page_title', 'Movies')

@section('page_content')
    <div class="container py-5">
        <div class="row row-cols-5">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <h3>Titolo: {{ $movie['title'] }}</h3>
                        <h5>Titolo originale: {{ $movie['original_title'] }}</h5>
                        <span>Data di uscita: {{ $movie['date'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
