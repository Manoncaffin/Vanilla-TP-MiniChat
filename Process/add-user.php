<?php

var_dump($_POST);
require_once('../Process/database_connect.php');
if(
    isset($_POST["pseudo"]) && !empty($_POST["pseudo"]) && 
    isset($_POST["message"]) && !empty($_POST["message"])
){
    $request = $database->prepare("INSERT INTO utilisateur (pseudo) VALUES (:pseudo)");
    $request->execute([
        'pseudo' => $_POST["pseudo"],
    ]);
} 

{
    $lastId = $database->lastInsertId();
    $date = date('d-m-y h:i:s');
    $ip=$_SERVER['REMOTE_ADDR'];

    $request=$database->prepare("INSERT INTO message (content, created_at, ip_address, user_id)
    VALUES(:content, :created_at, :ip_address, :user_id)");
  
     $request->execute([
         'content'=>$_POST["message"],
         'created_at'=>$date,
         'ip_address'=>$ip,
         'user_id'=>$lastId
    ]);
}

header('Location: ../index.php');

?>