@extends ('layouts.mainTemplate')

@section('mainContent')
    <h3></h3>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
        You're logged in as <b>{{ Auth::user()->name }}</b>
    </h2>
@endsection