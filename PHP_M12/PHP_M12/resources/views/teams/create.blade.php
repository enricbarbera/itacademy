@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Create new team</h3>
    <form class="text-center w-75 mx-auto mt-3" method="post" action="{{route('teams.store')}}">
        @csrf
        <div class="row mb-2">
            <div class="col-3">
                <h5>Name</h5>
                <input class="text-center" name="name" placeholder="insert team name" value="{{old('name')}}">
            </div>
            <div class="col-3">
                <h5>City</h5>
                <input class="text-center" name="city" placeholder="insert team city" value="{{old('city')}}">
            </div>
            <div class="col-3">
                <h5>Stadium</h5>
                <input class="text-center" name="stadium" placeholder="insert team stadium" value="{{old('stadium')}}">
            </div>
            <div class="col-3">
                <h5>Color</h5>
                <input class="text-center" name="color" placeholder="insert team color" value="{{old('color')}}">
            </div>
        </div>
        <div class="row" style="height:40px">
            <div class="col-3 text-danger">
            @error('name')
            *{{$message}}
            @enderror
            </div>
        </div>
        <button class="btn btn-primary">Add</button>
    </form>
    @endsection