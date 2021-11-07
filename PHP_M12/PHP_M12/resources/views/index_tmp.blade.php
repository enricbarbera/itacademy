<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>INDEX</title>
</head>
<body class="text-end m-3">
    <x-app-layout>

        <x-nav-bar/>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                You're logged in!
                <!-- {{ __('Dashboard') }} -->
            </h2>
        </x-slot>

        <!-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row justify-content-center p-6 overflow-hidden bg-primary">
            <a href="{{route('teams.list')}}" class="col-4">
                <div class="btn btn-outline-light text-center text-white bg-primary shadow-sm sm:rounded-lg p-6 mx-6">Show teams</div>
            </a>
            <a href="{{route('matches.list')}}" class="col-4">
                <div class="text-center text-white bg-primary shadow-sm sm:rounded-lg p-6 mx-6">Show matches</div>
            </a>
        </div> -->
    </x-app-layout>
</body>
</html>