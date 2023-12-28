@extends('layouts.app')

@section('content')


    <div class="container">
        <h1>Lista de Pokémon</h1>

        <div class="row">
            @foreach ($pokemons as $pokemon)
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ url("/pokemon/{$pokemon['name']}") }}" class="card-body text-center">
                            <h5 class="card-title">{{ ucfirst($pokemon['name']) }}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<style>

    .card {
        margin-bottom: 20px;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .card:hover{
        transform: scale(1.05);
    }

    .card a {
    text-decoration: none;
    color: #333;
    transition: color 0.3s, text-decoration 0.3s;
}

.card a:hover {
    text-decoration: underline;
    color: blue;
}

    h1 {
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        margin-bottom: 30px;
    }

</style>

@stop
