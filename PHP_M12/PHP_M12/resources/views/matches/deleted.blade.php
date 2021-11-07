@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Match <b>{{$match->team_1->name}}</b> vs <b>{{$match->team_2->name}}</b> deleted</h3>
    <a class="text-center" href="{{route('matches.list')}}"><p>Back to matches list</p></a>
    @endsection