@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <a href="{{ url('home') }}" class="btn btn-primary mb-4">Ver todos los Pokémon</a>

        <div class="card">
            <div class="card-header">
                <h1 class="card-title">{{ ucfirst($pokemon['name']) }}</h1>
            </div>
            <div class="card-body">
                <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}" class="img-fluid mb-3">

                <h2>Detalles del Pokémon</h2>
                <ul class="list-group">
                <li class="list-group-item">Altura: {{ $pokemon['height'] }}</li>
                <li class="list-group-item">Peso: {{ $pokemon['weight'] }}</li>
                </ul>

                <h2 class="mt-3">Habilidades</h2>
                <ul class="list-group">
                    @foreach ($pokemon['abilities'] as $ability)
                    <li class="list-group-item">{{ ucfirst($ability['ability']['name']) }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
