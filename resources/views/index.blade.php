@extends('layouts/main_layout')

@section('content')
<div class="container py-5">

    <h1>
        Trains Table
    </h1>

    <div class="d-flex flex-wrap justify-content-center __movie-list">
        @foreach ($trains as $train)
            <div class="card __card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title">{{$train->id}}</h5>
                  <h6>Departure station: {{$train->departure_station}}</h6>
                  <h6>Arrival station: {{$train->arrival_station}}</h6>


                </div>
              </div>

        @endforeach
    </div>
</div>



@endsection
