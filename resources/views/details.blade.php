@extends('layouts.template')

@section('content')
    <div class="d-flex flex-wrap justify-content-center">
        <h2>Book Details</h2>
    </div>

    <br>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($publish as $pubs)
            <div class="card m-4" style="width: 18rem;">
                <div class="card-header">
                    <img src={{$pubs->image_url}} class="card-img-top" height="386px">
                </div>
                    <div class="card-body">

                    <h5 class="card-title">{{$pubs->name}}</h5>
                    <p class="card-text text-success">by</p>
                    <p class="card-text">{{$pubs->address}}</p>

                    <div class="d-flex">
                        <a type="submit" class="btn btn-danger mx-4" href="/publisher/{id}">Details</a>
                    </div>
                    </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- @foreach ($pubbook as $book)
<div class="card m-4" style="width: 18rem;">
    <div class="card-header">
        <img src={{$book->image_url}} class="card-img-top" height="386px">
    </div>
        <div class="card-body">

        <h5 class="card-title">{{$book->title}}</h5>
        <p class="card-text text-success">by</p>
        <p class="card-text">{{$book->author}}</p>

        <div class="d-flex">
            <a type="submit" class="btn btn-danger mx-4" href="/publisher/{bookId}">Details</a>
        </div>
        </div>
</div>
@endforeach --}}