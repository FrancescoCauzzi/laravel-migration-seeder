@extends('layouts/main_layout')

@section('content')
<div class="container-fluid py-5 __main-ctn">

    <div class="container py-5">

        <h1 class="__page-title">
            Trains Table
        </h1>
        <div class="py-4">

            <a href="/trainbonus"><button type="button" class="btn btn-primary">Go to the bonus part</button></a>
        </div>

        <div class="d-flex flex-wrap justify-content-center __trains-list">
            @foreach ($trains as $train)
            <div class="card __card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{$train->train_code}} -  {{ucwords($train->company)}}</h5>
                    <h6>Departure station: {{ucwords($train->departure_station)}}</h6>
                    <h6>Departure time: {{$train->departure_time}}, {{\Carbon\Carbon::parse($train->departure_day)->format('d/m/Y')}}</h6>
                    <h6>Arrival station: {{ucwords($train->arrival_station)}}</h6>
                    <h6>Arrival time: {{$train->arrival_time}}, {{\Carbon\Carbon::parse($train->arrival_day)->format('d/m/Y')}}</h6>
                    <h6>Number of carriages: {{$train->number_of_carriages}}</h6>

                </div>
            </div>

            @endforeach
        </div>

    </div>
</div>



@endsection
