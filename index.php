<?php
require_once __DIR__ . "/partials/functions.php";
require_once __DIR__ . "/partials/logic.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container justify-content-center text-center mt-5">

        <h1 class="display-5 fw-bold">PASSWORD GENERATOR</h1>

        <h2>Inserisci qui sotto la lunghezza della password che vuoi generare!</h2>

        <form action="" method="GET" class="container d-flex justify-content-center align-items-center mt-4 gap-5">

            <label for="input-length" class="text-white" >Scegli la lunghezza della password: </label>
            <input type="number" name="input-length" id="input-length">
            <button type="submit" class="btn btn-warning">Genera Password!</button>

        </form>
        <div class="container mt-5 border rounded-5">
            <p class="text-white fs-5">La password generata di <?= $password_length ?> caratteri è:</p>
            <h2 class="fw-bold"><?= $passfinale ?></h2>

        </div>

    </div>
</body>
    
</body>
</html>