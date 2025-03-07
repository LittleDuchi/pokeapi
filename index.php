<?php
require 'API.php';

$pokemon_name = isset($_GET['pokemon']) ? $_GET['pokemon'] : 'pikachu';
$data = PokemonAPI::get_pokemon_data($pokemon_name);

require 'head.php';
require 'body.php';
?>
