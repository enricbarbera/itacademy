@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Register new player</h3>
    <form class="text-center w-75 mx-auto mt-3" method="post" action="{{route('players.store')}}">
        @csrf
        <div class="row mb-2 justify-content-center">
            <div class="col-2">
                <h5>Name</h5>
                <input class="text-center w-100" name="name" placeholder="player name" value="{{old('name')}}">
            </div>
            <div class="col-2">
                <h5>Address</h5>
                <input class="text-center w-100" name="address" placeholder="player address" value="{{old('address')}}">
            </div>
            <div class="col-2">
                <h5>Email</h5>
                <input class="text-center w-100" name="email" placeholder="player email" value="{{old('email')}}">
            </div>
            <div class="col-2">
                <h5>License</h5>
                <input class="text-center w-100" name="license" placeholder="player license" value="{{old('license')}}">
            </div>
            <div class="col-2">
                <h5>Team ID number</h5>
                <input class="text-center w-100" name="team" placeholder="player team ID" value="{{old('team')}}">
            </div>
        </div>
        <div class="row justify-content-center" style="height:40px">
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
        <button class="btn btn-primary">Register</button>
    </form>
    @endsection