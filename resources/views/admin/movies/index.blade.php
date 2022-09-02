@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            

                @foreach ($movies as $movie)
                    {{-- {{ $movie['title'] }}
                    {{ $movie['plot'] }}
                    {{ $movie['url_img'] }} --}}
                    <div class="col-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$movie['url_img']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie['title']}}</h5>
                          <p class="card-text">{{$movie['plot']}}</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                @endforeach

        </div>
    </div>
@endsection
