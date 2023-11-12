@extends('layout')

@section('content')
<div class="container">
    @php $count = 0; @endphp
    @foreach($movies as $m)
        @if($count % 3 == 0)
            <div class="d-flex flex-row p-2 justify-content-between">
        @endif
        <div class="d-flex flex-col justify-content-center">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$m->photo}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$m->title}}</h5>
                    <p class="card-text">{{$m->description}}</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @php $count++; @endphp
        @if($count % 3 == 0)
            </div>
        @endif
    @endforeach
    @if($count % 3 != 0)
        </div>
    @endif

    <div class="d-flex flex-row justify-content-center">
        {{$movies->links()}}
    </div>

</div>
@endsection

