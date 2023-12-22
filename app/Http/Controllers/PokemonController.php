<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=20');
        $pokemons = $response->json()['results'];

        return view('home', compact('pokemons'));
    }

    public function show($id)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}");
        $pokemon = $response->json();

        return view('pokemon.show', compact('pokemon'));
    }
}
