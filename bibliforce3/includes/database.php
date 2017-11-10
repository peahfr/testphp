<?php
/* Connexion à la base de données */

$dbh = new PDO('mysql:host=localhost;dbname=bibliforce3;charset=utf8',
                'root', '');

// Mode Debug
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

//Tableaux associatifs par defaut
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>