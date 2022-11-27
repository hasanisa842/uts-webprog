@extends('layouts.template')

@section('content')
    <div class="d-flex flex-wrap justify-content-center">
        <h2>Publishers</h2>
    </div>
    <br>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($publish as $bookPubs)
            <div class="card m-4" style="width: 18rem;">
                <div class="card-header">
                    <img src={{$bookPubs->image_url}} class="card-img-top" height="386px">
                </div>
                    <div class="card-body">

                    <h5 class="card-title">{{$bookPubs->title}}</h5>
                    <p class="card-text text-success">by</p>
                    <p class="card-text">{{$bookPubs->author}}</p>

                    <div class="d-flex">
                        <a type="submit" class="btn btn-danger mx-4" href="/publisher{id}">Details</a>
                    </div>
                    </div>
            </div>
        @endforeach

    </div>
@endsection