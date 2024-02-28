<?php 
 

  $password_length = (int) $_GET['input-length'];
 


// ARRAY DI LETTERE NUMERI E SIMBOLI



 function random_password($len)  {

    $array_big = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $array_small = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $array_numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    $array_symbols = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '"', '\'', '<', '>', ',', '.', '?', '/');
   
    
    $random_big = array_rand($array_big); 
    $random_small = array_rand($array_small);
    $random_numbers = array_rand($array_numbers);
    $random_symbols = array_rand($array_symbols);

    
    $password = "";

    for ($i = 0; $i < $len; $i++){
        // genero un numero da 1 a 4 per scegliere in quale array prendere dato
        $numrand = rand(1, 4);
        //se è 1 prendo una lettera a caso da array_big e la aggiungo al fondo di $password
        if ($numrand == 1) {
            $random_big = $array_big[array_rand($array_big)];
            $password .= $random_big;  
        }
        //se è 2 prendo una lettera a caso da array_small e la aggiungo al fondo di $password
        if ($numrand == 2) {
            $random_small = $array_small[array_rand($array_small)];
            $password .= $random_small;  
        }
        //se è 3 prendo un numero a caso da array_numbers e la aggiungo al fondo di $password
        if ($numrand == 3) {
            $random_numbers = array_rand($array_numbers);
            $password .= $random_numbers;  
        }
        //se è 4 prendo una lettera a caso da array_symbols e la aggiungo al fondo di $password
        if ($numrand == 4) {
            $random_symbols = $array_symbols[array_rand($array_symbols)];
            $password .= $random_symbols;  
        }
    }
    return $password;
 }

//  risultato password finale
 $passfinale= random_password($password_length );

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

            <label for="input-length" class="text-white" >Scrivi la lunghezza della password: </label>
            <input type="number" name="input-length" id="input-length">
            <button type="submit" class="btn btn-warning">Genera Password!</button>

        </form>

       <?= $passfinale ?>

    </div>
</body>
    
</body>
</html>