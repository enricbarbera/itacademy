@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Player <b>{{$player->name}}</b> deleted</h3>
    <a class="text-center" href="{{route('players.list')}}"><p>Back to players list</p></a>
@endsection