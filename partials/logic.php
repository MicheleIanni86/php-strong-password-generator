<?php


$password_length = isset($_GET['input-length']) ? (int) $_GET['input-length'] : 5;

//  risultato password finale
$passfinale= random_password($password_length );

?>