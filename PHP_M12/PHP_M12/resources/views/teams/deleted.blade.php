@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Team <b>{{$team->name}}</b> deleted</h3>
    <a class="text-center" href="{{route('teams.list')}}"><p>Back to teams list</p></a>
@endsection