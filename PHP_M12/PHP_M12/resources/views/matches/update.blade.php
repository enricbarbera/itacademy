@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3 class="text-center">MATCH EDITED</h3>
    <h4 class="text-center">NEW VALUES</h4>
    <div class="mt-3 w-75 m-auto p-0">
        <div class="row border-bottom">
                <div class="col-3 text-center"><p>TEAM 1</p></div>
                <div class="col-3 text-center"><p>TEAM 2</p></div>
                <div class="col-3 text-center"><p>WHEN</p></div>
                <div class="col-3 text-center"><p>PLACE</p></div>
        </div>
        <div class="row border-bottom">
                <div class="col-3 text-center"><p>{{$match->team_1->name}}</p></div>
                <div class="col-3 text-center"><p>{{$match->team_2->name}}</p></div>
                <div class="col-3 text-center"><p>{{$match->when}}</p></div>
                <div class="col-3 text-center"><p>{{$match->place}}</p></div>
        </div>
    </div>
    <a class="text-center" href="{{route('matches.list')}}"><p>Back to matches list</p></a>
@endsection