@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">PLAYER EDITED</h3>
    <h4 class="text-center">NEW VALUES</h4>
    <div class="mt-3 w-75 m-auto p-0">
        <div class="row border-bottom justify-content-center">
                <div class="col-2 text-center"><p>NAME</p></div>
                <div class="col-2 text-center"><p>ADDRESS</p></div>
                <div class="col-2 text-center"><p>EMAIL</p></div>
                <div class="col-2 text-center"><p>LICENSE</p></div>
                <div class="col-2 text-center"><p>TEAM</p></div>
        </div>
        <div class="row border-bottom justify-content-center">
                <div class="col-2 text-center"><p>{{$player->name}}</p></div>
                <div class="col-2 text-center"><p>{{$player->address}}</p></div>
                <div class="col-2 text-center"><p>{{$player->email}}</p></div>
                <div class="col-2 text-center"><p>{{$player->license}}</p></div>
                <div class="col-2 text-center"><p>{{$player->team->name}}</p></div>
        </div>
    </div>
    <a class="text-center" href="{{route('players.list')}}"><p>Back to players list</p></a>
@endsection