<?php

    require_once('./Process/database_connect.php');


    $request = $database->query('SELECT * FROM utilisateur');
    $pseudos = $request->fetchAll();


    $request = $database->query('SELECT * FROM message');
    $messages = $request->fetchAll();

    $request = $database->query('SELECT created_at FROM message');
    $times = $request->fetchAll();
    
?>



