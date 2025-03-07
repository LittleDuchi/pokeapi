<body class="container bg-gradient-black p-5">
<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="mb-4">Pokémon: <?= ucfirst($data["name"]); ?></h1>
            <img src="<?= $data["sprites"]["front_default"]; ?>" class="img-fluid mb-3" width="150px" alt="<?= $data["name"]; ?>" />
            <h3 class="h3">ID: <?= $data["id"]; ?></h3>
            <h4 class="h4">Peso: <?= $data["weight"]/10; ?> kilogramos</h4>
            <h5 class="h5">Altura: <?= $data["height"]*10; ?> centímetros</h5>
        </div>
    </div>
    <section class="row mt-5">
        <div class="col text-center">
            <form action="" method="GET">
                <div class="form-group">
                    <input type="text" name="pokemon" class="form-control" placeholder="Buscar Pokémon..." required >
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
