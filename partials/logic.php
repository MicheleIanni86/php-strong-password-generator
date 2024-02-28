<?php


$password_length = (int) $_GET['input-length'];

//  risultato password finale
$passfinale= random_password($password_length );

?>