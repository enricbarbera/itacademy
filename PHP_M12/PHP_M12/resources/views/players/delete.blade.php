@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Do you really want to delete player</h3>
    <h2 class="text-center"><b>{{$player->name}}</b>?</h2>
    <form class="text-center" action="{{route('players.destroy', $player)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-primary" type="submit">Confirm</button>
    </form>
    <a class="text-center" style="display: block" href="{{route('players.list')}}">Cancel</a>
@endsection