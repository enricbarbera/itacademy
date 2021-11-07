@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Registered players list</h3>
    <a href="{{route('players.create')}}" class="text-center"><h5>Add new player</h5></a>
    <ul class="mt-3 m-auto p-0" style="width:90%">
        <div class="row border-bottom border-5 bg-primary text-white">
            <div class="col-1 text-center flex-fill"><p>ID</p></div>
            <div class="col-1 text-center flex-fill"><p>NAME</p></div>
            <div class="col-1 text-center flex-fill"><p>ADDRESS</p></div>
            <div class="col-1 text-center flex-fill"><p>EMAIL</p></div>
            <div class="col-1 text-center flex-fill"><p>LICENSE</p></div>
            <div class="col-1 text-center flex-fill"><p>TEAM</p></div>
            <div class="col-2 text-center flex-fill"><p></p></div>
            <!-- <div class="col-1 text-center flex-fill"><p></p></div>
            <div class="col-1 text-center flex-fill"><p></p></div> -->
        </div>
        @foreach ($players as $player)
            <div class="row row-cols-auto border-bottom">
                <div class="col-1 text-center flex-fill"><p>{{$player->id}}</p></div>
                <div class="col-1 text-center flex-fill"><p>{{$player->name}}</p></div>
                <div class="col-1 text-center flex-fill"><p>{{$player->address}}</p></div>
                <div class="col-1 text-center flex-fill"><p>{{$player->email}}</p></div>
                <div class="col-1 text-center flex-fill"><p>{{$player->license}}</p></div>
                <div class="col-1 text-center flex-fill"><p>{{$player->team_id}}</p></div>
                <div class="col-2 text-center flex-fill">
                    <a class="mx-2" href="{{route('players.show', $player)}}">SHOW</a>
                    <a class="mx-2" href="{{route('players.edit', $player)}}">EDIT</a>
                    <a class="mx-2" href="{{route('players.delete', $player)}}">DELETE</a>
                </div>
                <!-- <div class="col-1 text-center flex-fill"><a href="{{route('players.show', $player)}}">SHOW</a></div>
                <div class="col-1 text-center flex-fill"><a href="{{route('players.edit', $player)}}">EDIT</a></div>
                <div class="col-1 text-center flex-fill"><a href="{{route('players.delete', $player)}}">DELETE</a></div> -->
            </div>
        @endforeach
    </ul>
@endsection