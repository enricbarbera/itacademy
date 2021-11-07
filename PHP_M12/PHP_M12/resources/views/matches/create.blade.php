@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Create new match</h3>
    <form class="text-center w-75 mx-auto mt-3" method="post" action="{{route('matches.store')}}">
        @csrf
        <div class="row mb-2">
            <div class="col-3">
                <h5>First team ID</h5>
                <input class="text-center" name="team_1" placeholder="insert first team ID" value="{{old('team_1')}}">
            </div>
            <div class="col-3">
                <h5>Second team ID</h5>
                <input class="text-center" name="team_2" placeholder="insert second team ID" value="{{old('team_2')}}">
            </div>
            <div class="col-3">
                <h5>Date & Time</h5>
                <input class="text-center" name="when" placeholder="yyyy-mm-dd hh:mm:ss" value="{{old('when')}}">
            </div>
            <div class="col-3">
                <h5>Place</h5>
                <input class="text-center" name="place" placeholder="insert match location" value="{{old('place')}}">
            </div>
        </div>
        <div class="row text-danger" style="height:40px">
            <div class="col-3">
                @error('team_1')
                *{{$message}}
                @enderror
            </div>
            <div class="col-3">
                @error('team_2')
                *{{$message}}
                @enderror
            </div>
            <div class="col-3">
                @error('when')
                *{{$message}}
                @enderror
            </div>
            <div class="col-3">
                @error('place')
                *{{$message}}
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">Add</button>
    </form>
    @endsection