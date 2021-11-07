@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">CURRENT VALUES FOR TEAM</h3>
    <h2 class="text-center"><b>{{$team->name}}</b></h2>
    <div class="text-center">
        <p>Name: {{$team->name}}</p>
        <p>City: {{$team->city}}</p>
        <p>Stadium: {{$team->stadium}}</p>
        <p>Color: {{$team->color}}</p>
        <a href="{{route('teams.list')}}">Back to teams list</a>
    </div>
@endsection