@extends ('layouts.mainTemplate')

@section('mainContent')
    <h4 class="text-center">EDIT VALUES FOR TEAM</h4>
    <h3 class="text-center"><b>{{$team->name}}</b></h3>
    <form class="text-center w-75 mx-auto mt-3" method="post" action="{{route('teams.update', $team)}}">
        @csrf
        @method('put')
        <div class="row mb-2">
            <div class="col-3">
                <h5>Name</h5>
                <input class="text-center" name="name" value="{{old('name', $team->name)}}">
            </div>
            <div class="col-3">
                <h5>City</h5>
                <input class="text-center" name="city" value="{{old('city', $team->city)}}">
            </div>
            <div class="col-3">
                <h5>Stadium</h5>
                <input class="text-center" name="stadium" value="{{old('stadium',$team->stadium)}}">
            </div>
            <div class="col-3">
                <h5>Color</h5>
                <input class="text-center" name="color" value="{{old('color',$team->color)}}">
            </div>
        </div>
        <div class="row" style="height:40px">
            <div class="col-3 text-danger">
                @error('name')
                *{{$message}}
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">Edit</a>
    </form>
@endsection