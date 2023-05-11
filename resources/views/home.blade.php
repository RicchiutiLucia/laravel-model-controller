@extends('layouts.app')
@section('content')
    <h1 class="text-center">Movies</h1>
    
    <div class="container">
        <div class="row">
            @foreach ($table as $elem)
                    <div class="col-3 g-3">
                        <div class="card bg-secondary h-100 " style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{$elem['title']}}</h5>
                                <p class="card-text text-info ">Nationality: {{$elem['nationality']}}</p>
                                <p class="card-text text-info">Date: {{$elem['date']}}</p>
                                <p class="card-text text-info">Vote: {{$elem['vote']}}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

    </div>
@endsection