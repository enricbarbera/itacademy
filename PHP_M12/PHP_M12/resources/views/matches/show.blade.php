@extends ('layouts.mainTemplate')

@section('mainContent')
    <h4 class="text-center">MATCH {{$match->id}} OPPONENTS</h4>
    <h3 class="text-center mb-3 border-bottom"><b>{{$team1->name}} vs {{$team2->name}}</b></h3>
    <h4 class="text-center">MATCH {{$match->id}} DATE AND TIME</h4>
    <h3 class="text-center mb-3 border-bottom"><b>{{$match->when}}</b></h3>
    <h4 class="text-center">MATCH {{$match->id}} LOCATION</h4>
    <h3 class="text-center mb-3 border-bottom"><b>{{$match->place}}</b></h3>
    <a class="text-center" href="{{route('matches.list')}}"><p>Back to matches list</p></a>
@endsection