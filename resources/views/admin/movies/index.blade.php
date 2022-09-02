@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 bg-dark text-light">

                @foreach ($movies as $movie)
                    {{ $movie['title'] }}
                    {{ $movie['plot'] }}
                    {{ $movie['url_img'] }}
                @endforeach
            </div>
        </div>
    </div>
@endsection
