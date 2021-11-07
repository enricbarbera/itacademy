@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Do you really want to delete match</h3>
    <h2 class="text-center"><b>{{$match->team_1->name}}</b> vs <b>{{$match->team_2->name}}</b>?</h2>
    <form class="text-center" action="{{route('matches.destroy', $match)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-primary mt-5" type="submit">Confirm</button>
    </form>
    <a class="text-center" href="{{route('matches.list')}}"><p>Cancel</p></a>
@endsection