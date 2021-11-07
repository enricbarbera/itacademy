@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Enroled team list</h3>
    <a href="{{route('teams.create')}}" class="text-center"><h5>Add new team</h5></a>
    <ul class="mt-3 w-75 m-auto p-0">
        <div class="row border-bottom border-5 bg-primary text-white">
            <div class="col-1 text-center"><p>ID</p></div>
            <div class="col-2 text-center"><p>NAME</p></div>
            <div class="col-2 text-center"><p>CITY</p></div>
            <div class="col-2 text-center"><p>STADIUM</p></div>
            <div class="col-2 text-center"><p>COLOR</p></div>
        </div>
        @foreach ($teams as $team)
            <div class="row border-bottom">
                <div class="col-1 text-center"><p>{{$team->id}}</p></div>
                <div class="col-2 text-center"><p>{{$team->name}}</p></div>
                <div class="col-2 text-center"><p>{{$team->city}}</p></div>
                <div class="col-2 text-center"><p>{{$team->stadium}}</p></div>
                <div class="col-2 text-center"><p>{{$team->color}}</p></div>
                <div class="col-1 text-center"><a href="{{route('teams.show', $team)}}">SHOW</a></div>
                <div class="col-1 text-center"><a href="{{route('teams.edit', $team)}}">EDIT</a></div>
                <div class="col-1 text-center"><a href="{{route('teams.delete', $team)}}">DELETE</a></div>
            </div>
        @endforeach
    </ul>
@endsection