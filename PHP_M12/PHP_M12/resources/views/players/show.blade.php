@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">CURRENT VALUES FOR PLAYER</h3>
    <h2 class="text-center"><b>{{$player->name}}</b></h2>
    <div class="text-center">
        <p>Name: {{$player->name}}</p>
        <p>Address: {{$player->address}}</p>
        <p>Email: {{$player->email}}</p>
        <p>License: {{$player->license}}</p>
        <p>Team: {{$team->name}}</p>
        <a href="{{route('players.list')}}">Back to players list</a>
    </div>
@endsection