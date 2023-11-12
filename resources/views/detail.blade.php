@extends('layout')

@section('content')
    <div class="row">
        <div class="col-4">
            <img src="cover/{{$movie->photo}}" alt="" style="width: 100%;">
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <h3>{{$movie->title}}</h3>
                    <h5>
                        @forelse ($movie->genres as $genre)
                           {{$genre->name }} 
                        @empty
                            
                        @endforelse
                    </h5>
                    <p>{{$movie->description}}</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>episode</th>
                                <th>title</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($movie->episodes as $episode )
                            <tr>
                                    <td scope="row">{{$episode->episode}}</td>
                                    <td>{{$episode->title}}</td>
                            </tr>
                           @empty
                           <tr>
                            <td colspan="2">no data</td>
                         </tr> 
                           @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection