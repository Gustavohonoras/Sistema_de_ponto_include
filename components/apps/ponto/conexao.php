<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "ponto";
    $port = 3306;

    try {
        $conn = new PDO("mysql:host=$host; dbname=" . $dbname, $user, $pass);
    } catch (PDOException $err) {
        //echo "Conexão com banco de dados não realizada com sucesso. Erro gerado." . $err->getMessage() ;
    }
    $mysqli = new mysqli($host, $user, $pass, $dbname);

    if($mysqli->connect_errno){
        echo "Falha ao conectar:(" . $conn->connect_errno . ")" . $mysqli->connect_errno;
    }
    
    if(!isset($_SESSION)){
        session_start();
    }
?>