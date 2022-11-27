@extends('layouts.template')

@section('content')

    <div class="d-flex flex-wrap justify-content-center">
        <h2>Fantasy</h2>
    </div>
    <br>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($fantasy->category as $fanBook)
        <div class="card m-4" style="width: 18rem;">
            <div class="card-header">
                <img src="{{$fanBook->image_url}}" class="card-img-top" height="386px">
            </div>

            <div class="card-body">

            <h5 class="card-title">{{$fanBook->title}}</h5>
            <p class="card-text text-success">by</p>
            <p class="card-text">{{$fanBook->author}}</p>
            </div>

        </div>
        @endforeach
    </div>
    <br>

    <div class="d-flex flex-wrap justify-content-center">
        <h2>Adventure</h2>
    </div>
    <br>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($adventure->category as $adBook)
            <div class="card m-4" style="width: 18rem;">
                <div class="card-header">
                    <img src="{{$adBook->image_url}}" class="card-img-top" height="386px">
                </div>

                <div class="card-body">

                <h5 class="card-title">{{$adBook->title}}</h5>
                <p class="card-text text-success">by</p>
                <p class="card-text">{{$adBook->author}}</p>
                </div>

            </div>
        @endforeach
    </div>

    <div class="d-flex flex-wrap justify-content-center">
        <h2>Comedy</h2>
    </div>
    <br>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($comedy->category as $comBook)
        <div class="card m-4" style="width: 18rem;">
            <div class="card-header">
                <img src="{{$comBook->image_url}}" class="card-img-top" height="386px">
            </div>

            <div class="card-body">

            <h5 class="card-title">{{$comBook->title}}</h5>
            <p class="card-text text-success">by</p>
            <p class="card-text">{{$comBook->author}}</p>
            </div>

        </div>
        @endforeach
    </div>

@endsection