<?php



$user = 'root'; 
    $pass = '' ;
    $dbh = new PDO('mysql:host=localhost;dbname=data', $user, $pass);
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );