@extends ('layouts.mainTemplate')

@section('mainContent')
    <h4 class="text-center">EDIT VALUES FOR MATCH</h4>
    <h3 class="text-center"><b>{{$match->team_1->name}}</b> vs <b>{{$match->team_2->name}}</b></h3>
    <form class="text-center w-75 mx-auto mt-3" method="post" action="{{route('matches.update', $match)}}">
        @csrf
        @method('put')
        <div class="row mb-2">
            <div class="col-3">
                <h5>First team ID</h5>
                <input class="text-center" name="team_1" value="{{old('team_1', $match->team_1->id)}}">
            </div>
            <div class="col-3">
                <h5>Second team ID</h5>
                <input class="text-center" name="team_2" value="{{old('team_2', $match->team_2->id)}}">
            </div>
            <div class="col-3">
                <h5>Date & Time</h5>
                <input class="text-center" name="when" value="{{old('when', $match->when)}}">
            </div>
            <div class="col-3">
                <h5>Place</h5>
                <input class="text-center" name="place" value="{{old('place', $match->place)}}">
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
        </div>
        <button class="btn btn-primary">Edit</button>
    </form>
    @endsection