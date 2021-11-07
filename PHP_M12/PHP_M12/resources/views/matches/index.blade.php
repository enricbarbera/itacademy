@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Current competition program</h3>
    <a class="text-center" href="{{route('matches.create')}}"><h5>Add new match</h5></a>
    <ul class="mt-3 w-75 m-auto p-0">
        <div  class="row border-bottom border-5 bg-primary text-white">
            <div class="col-1 text-center"><p>ID</p></div>
            <div class="col-2 text-center"><p>TEAM 1</p></div>
            <div class="col-2 text-center"><p>TEAM 2</p></div>
            <div class="col-2 text-center"><p>WHEN</p></div>
            <div class="col-2 text-center"><p>PLACE</p></div>
        </div>
        @foreach ($matches as $match)
            <div class="row border-bottom">
                <div class="col-1 text-center"><p>{{$match->id}}</p></div>
                <div class="col-2 text-center"><p>{{$match->team_1->name}}</p></div>
                <div class="col-2 text-center"><p>{{$match->team_2->name}}</p></div>
                <div class="col-2 text-center"><p>{{$match->when}}</p></div>
                <div class="col-2 text-center"><p>{{$match->place}}</p></div>
                <div class="col-1 text-center"><a href="{{route('matches.show', $match)}}">SHOW</a></div>
                <div class="col-1 text-center"><a href="{{route('matches.edit', $match)}}">EDIT</a></div>
                <div class="col-1 text-center"><a href="{{route('matches.delete', $match)}}">DELETE</a></div>
            </div>
        @endforeach
    </ul>
    @endsection