@extends('layout')

@section('content')

<div class="d-flex flex-col justify-content-around">
    @foreach($movie as $m)
        <div class="card" style="width: 18rem;">
            <img src="{{$m->photo}}" class="card-img-top" alt="img">
            <div class="card-body">
            <h5 class="card-title">{{$m->title}}</h5>
            <p class="card-text text-truncate" id="truncatedText">{{$m->description}}</p>
            <a href="{{ route('movie.detail', ['id'=>$m->id]) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex flex-row justify-content-center">
    {{$movie->links()}}
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection
