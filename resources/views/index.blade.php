@extends('layouts.app')
@section('content')
<div class="text-center">
    <div class="row">
      <div class="text-center mt-4">
        <h1 class="fw-bold"><a href="{{ route('index') }}">API Weather Map con API geolocalización</a></h1>
      </div>
      <div class="col-md-4">
        <div class="search-form">
            <form action="{{ route('search') }}" method="get">
                @csrf
                <input type="text" class="form-control form-control-lg" name="city" id="city" placeholder="Escribe para buscar">
                <div class="d-grid gap-2 col-12 mx-auto">
                    <button type="submit" class="btn btn-lg btn-warning mt-3">Buscar</button>
                </div>
            </form>
        </div>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="search-form">
            @if ( !empty($data) )
            <div class="text-center">
                <h1 class="fw-bold text-capitalize">{{ $data['name'] }}</h1>
                <h2>{{ ceil($data['main']['temp'] - 273.15) }}º</h2>
                <h5 class="text-capitalize">{{ $data['weather'][0]['description'] }}</h5>
                <h5>
                    <span>Máx: {{ $data['main']['temp_max'] - 273.15 }}º</span>
                    <span>Min: {{ $data['main']['temp_min'] - 273.15 }}º</span>
                </h5>
            </div>
            @else
                <h2>Estas en ambiente local, escribe el nombre de un pais, ciudad, pueblo</h2>
            @endif
        </div>
      </div>
    </div>
  </div>
@endsection