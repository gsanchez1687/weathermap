@extends('layouts.app')
@section('content')
    <div class="row text-center py-5">
        <div class="animate__animated animate__pulse col-md">
            <h1 class="fw-bold">{{ $datamiami['name'] }}</h1>
            <h3>Humidity</h3>
            <h2 class="fw-light">
                <i class="px-2 bi bi-moisture"></i>
                {{ $datamiami['main']['humidity'] }}
            </h2>
            @include('components.maps.miami');
        </div>
        <div class="animate__animated animate__pulse col-md">
            <h1 class="fw-bold">{{ $dataorlando['name'] }}</h1>
            <h3>Humidity</h3>
            <h2 class="fw-light">
                <i class="px-2 bi bi-moisture"></i>
                {{ $dataorlando['main']['humidity'] }}
            </h2>
            @include('components.maps.orlando');
        </div>
        <div class="animate__animated animate__pulse col-md">
            <h1 class="fw-bold">{{ $datanewyork['name'] }}</h1>
            <h3>Humidity</h3>
            <h2 class="fw-light">
                <i class="px-2 bi bi-moisture"></i>
                {{ $datanewyork['main']['humidity'] }}
            </h2>
            @include('components.maps.newyork');
        </div>
    </div>
@endsection
