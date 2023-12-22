@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de pokemones</h1>
            <div class="row">
            @foreach ($pokemons as $pokemon)
                <div class="col-md-4 mb-4">
                    <div class="card pokemon-card text-center" data-url="{{ url("/pokemon/{$pokemon['name']}") }}">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h4 class="card-title">{{ $pokemon['name'] }}</h4>
                    </div>
                </div>
                </div>
                @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
        $(document).ready(function () {
        $('.pokemon-card').click(function () {
                window.location.href = $(this).data('url');
            });

            $('.pokemon-card').hover(
                function () {
                    $(this).css('background-color', 'blue');
                },
                function () {
                    $(this).css('background-color', '');
                }
            );
        });
    </script>
@stop