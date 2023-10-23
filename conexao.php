<?php
    $hostname = "localhost";
    $dbname = "includedb";
    $user = "root";
    $password = "";

    $mysqli = new mysqli($hostname, $user, $password, $dbname);

    if($mysqli->connect_errno){
        echo "Falha ao conectar:(" . $conn->connect_errno . ")" . $mysqli->connect_errno;
    }
    
    if(!isset($_SESSION)){
        session_start();
    }

?>