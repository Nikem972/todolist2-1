<?php


$host = "localhost" ;
$user = "root" ;
$password = ""; 
$dataBase = "todolist2" ;

$dir_fs =  $_SERVER['DOCUMENT_ROOT']."/" ; 
$dir_ws = "/";


$mysqli = @new mysqli($host, $user, $password, $dataBase);

/* Vérification de la connexion */
if ($mysqli->connect_errno) {
    printf("Échec de la connexion: %s\n", $mysqli->connect_error);
    exit();
}



?>