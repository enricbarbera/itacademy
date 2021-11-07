@extends ('layouts.mainTemplate')

@section('mainContent')
    <h4 class="text-center">EDIT VALUES FOR PLAYER</h4>
    <h3 class="text-center"><b>{{$player->name}}</b></h3>
    <form class="text-center w-75 mx-auto mt-3" method="post" action="{{route('players.update', $player)}}">
        @csrf
        @method('put')
        <div class="row justify-content-center mb-1">
            <div class="col-2">
                <h5>Name</h5>
                <input class="text-center w-100" name="name" value="{{$player->name}}">
            </div>
            <div class="col-2">
                <h5>Address</h5>
                <input class="text-center w-100" name="address" value="{{old('city', $player->address)}}">
            </div>
            <div class="col-2">
                <h5>Email</h5>
                <input class="text-center w-100 pb-1" name="email" value="{{old('stadium',$player->email)}}">
            </div>
            <div class="col-2">
                <h5>License</h5>
                <input class="text-center w-100" name="license" value="{{old('color',$player->license)}}">
            </div>
            <div class="col-2">
                <h5>Team ID number</h5>
                <input class="text-center w-100" name="team" value="{{old('team',$player->team->id)}}">
            </div>
        </div>
        <div class="row justify-content-center mb-1" style="height:40px">
            <div class="col-2 text-danger" style="line-height:1.2">
                @error('name')
                *{{$message}}
                @enderror
            </div>
            <div class="col-2 text-danger" style="line-height:1.2">
            </div>
            <div class="col-2 text-danger" style="line-height:1.2">
                @error('email')
                *{{$message}}
                @enderror
            </div>
            <div class="col-2 text-danger" style="line-height:1.2">
                @error('license')
                *{{$message}}
                @enderror
            </div>
            <div class="col-2 text-danger" style="line-height:1.2">
                @error('team')
                *{{$message}}
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">Edit</a>
    </form>
@endsection