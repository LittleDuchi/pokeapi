<?php
const API_URL = "https://pokeapi.co/api/v2/pokemon/";

class PokemonAPI {
    public static function get_pokemon_data($pokemon_name) {
        $api_url = API_URL . strtolower($pokemon_name);
        $result = file_get_contents($api_url);
        return json_decode($result, true);
    }
}
?>
