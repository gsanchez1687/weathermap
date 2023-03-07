@extends('layouts.app')
@section('content')

<div class="text-center">
    <div class="row">
      <div class="col-md-4">
        <div class="search-form">
            <form action="{{ route('search') }}" method="get">
                @csrf
                <input type="text" class="form-control form-control-lg" name="city" id="city" placeholder="Nombre de la ciudad">
                <div class="d-grid gap-2 col-12 mx-auto">
                    <button type="submit" class="btn btn-lg btn-outline-primary mt-3">Buscar</button>
                </div>
            </form>
        </div>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="search-form">
            <div class="text-center">
                <h1 class="fw-bold text-capitalize">{{ $data['name'] }}</h1>
                <h2>{{ ceil($data['main']['temp'] - 273.15) }}º</h2>
                <h5 class="text-capitalize">{{ $data['weather'][0]['description'] }}</h5>
                <h5>
                    <span>Máx: {{ $data['main']['temp_max'] - 273.15 }}º</span>
                    <span>Min: {{ $data['main']['temp_min'] - 273.15 }}º</span>
                </h5>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection