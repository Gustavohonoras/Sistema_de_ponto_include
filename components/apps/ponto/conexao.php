<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "ponto";
    $port = 3306;

    try {
        $conn = new PDO("mysql:host=$host; dbname=" . $dbname, $user, $pass);
        echo "Conexão realizada com sucesso.";
    } catch (PDOException $err) {
        echo "Conexão com banco de dados não realizada com sucesso. Erro gerado." . $err->getMessage() ;
    }
?>