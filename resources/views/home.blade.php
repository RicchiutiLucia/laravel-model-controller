@extends('layouts.app')
@section('content')
    <h1 class="text-center">Movies</h1>
    
    <div class="container">
        <div class="row">
            @foreach ($table as $elem)
                    <div class="col-3 g-3">
                        <div class="card bg-primary h-100 " style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$elem['title']}}</h5>
                                <p class="card-text ">Nationality: {{$elem['nationality']}}</p>
                                <p class="card-text">Date: {{$elem['date']}}</p>
                                <p class="card-text">Vote: {{$elem['vote']}}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

    </div>
@endsection