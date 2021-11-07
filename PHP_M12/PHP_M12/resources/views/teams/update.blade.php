@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">TEAM <b>{{$team->name}}</b> EDITED</h3>
    <h4 class="text-center">NEW VALUES</h4>
    <div class="mt-3 w-75 m-auto p-0">
        <div class="row border-bottom">
                <div class="col-3 text-center"><p>NAME</p></div>
                <div class="col-3 text-center"><p>CITY</p></div>
                <div class="col-3 text-center"><p>STADIUM</p></div>
                <div class="col-3 text-center"><p>COLOR</p></div>
        </div>
        <div class="row border-bottom">
                <div class="col-3 text-center"><p>{{$team->name}}</p></div>
                <div class="col-3 text-center"><p>{{$team->city}}</p></div>
                <div class="col-3 text-center"><p>{{$team->stadium}}</p></div>
                <div class="col-3 text-center"><p>{{$team->color}}</p></div>
        </div>
    </div>
    <a class="text-center" href="{{route('teams.list')}}"><p>Back to teams list</p></a>
@endsection