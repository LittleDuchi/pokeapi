<?php
const API_URL = "https://pokeapi.co/api/v2/pokemon/";

function get_pokemon_data($pokemon_name) {
    $api_url = API_URL . strtolower($pokemon_name) . "/";
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

$pokemon_name = isset($_GET['pokemon']) ? $_GET['pokemon'] : 'pikachu';
$data = get_pokemon_data($pokemon_name);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PokéAPI Proyecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="PokéAPI Proyecto">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h1 class="mb-4">Pokémon: <?= ucfirst($data["name"]); ?></h1>
                <img src="<?= $data["sprites"]["front_default"]; ?>" class="img-fluid mb-3" width="150px" alt="<?= $data["name"]; ?>" />
                <div>
                    <h3 class="h3">ID: <?= $data["id"]; ?></h3>
                    <h4 class="h4">Peso: <?= $data["weight"]/10; ?> kilogramos</h4>
                    <h5 class="h5">Altura: <?= $data["height"]*10; ?> centimetros</h5>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col text-center">
                <form action="" method="GET">
                    <div class="form-group">
                        <input type="text" name="pokemon" class="form-control" placeholder="Buscar Pokémon..." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>


        



        
        <div class="row mt-5">
            <div class="col text-center">
                <h2 class="mb-4">Filtros</h2>
                <button class="btn btn-warning m-2;">Eléctrico</button>
                <button class="btn btn-danger m-2">Fuego</button>
                <button class="btn btn-info m-2">Agua</button>
                <button class="btn btn-success m-2">Planta</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
