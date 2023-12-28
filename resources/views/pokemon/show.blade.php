@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <a href="{{ url('home') }}" style="margin-left: 939px" class="btn btn-primary mb-4">Ver todos los Pokémon</a>

        <div class="card">
            <div class="card-header">
                <h1 class="card-title">{{ ucfirst($pokemon['name']) }}</h1>
                <p class="card-subtitle mb-2 text-muted">ID: {{ $pokemon['id'] }}</p>
            </div>
            <div class="card-body">
                <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}" class="img-fluid mb-3">

                <h2>Detalles del Pokémon</h2>
                <ul class="list-group">
                    <li class="list-group-item">Altura: {{ $pokemon['height'] }}</li>
                    <li class="list-group-item">Peso: {{ $pokemon['weight'] }}</li>
                    <li class="list-group-item">Tipo(s): 
                        @foreach ($pokemon['types'] as $type)
                            {{ ucfirst($type['type']['name']) }} 
                        @endforeach
                    </li>
                    <li class="list-group-item">Estadísticas:
                        <ul>
                            @foreach ($pokemon['stats'] as $stat)
                                <li>{{ ucfirst($stat['stat']['name']) }}: {{ $stat['base_stat'] }}</li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

                <h2 class="mt-3">Habilidades</h2>
                <ul class="list-group">
                    @foreach ($pokemon['abilities'] as $ability)
                        <li class="list-group-item">{{ ucfirst($ability['ability']['name']) }}</li>
                    @endforeach
                </ul>

                <h2 class="mt-3">Movimientos</h2>
                <ul class="list-group">
                    @foreach ($pokemon['moves'] as $move)
                        <li class="list-group-item">{{ ucfirst($move['move']['name']) }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
