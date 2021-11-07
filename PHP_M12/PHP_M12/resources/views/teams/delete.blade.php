@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">Do you really want to delete team</h3>
    <h2 class="text-center"><b>{{$team->name}}</b>?</h2>
    <form class="text-center" action="{{route('teams.destroy', $team)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-primary" type="submit">Confirm</button>
    </form>
    <a class="text-center" style="display: block" href="{{route('teams.list')}}">Cancel</a>
@endsection