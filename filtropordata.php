<?php
// Solicitação das datas

$data_busca1 = $_POST['data_busca1']; // A data entra no formato 11/12/1010
$data_busca1 = explode("/", $data_busca1);
list($d, $m, $y) = $data_busca1;
$data_busca1 = "$y-$m-$d"; // Data entra no formato do banco de dados y,m,d

$data_busca2 = $_POST['data_busca2']; // A data entra no formato 12/12/1011
$data_busca2 = explode("/", $data_busca2);
list($d, $m, $y) = $data_busca2;
$data_busca2 = "$y-$m-$d"; // Data entra no formato do banco de dados y,m,d

// Conexão com o servidor
$hostname = "localhost";
$dbname = "ponto";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $dbname);

if($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if(!isset($_SESSION)){
    session_start();
}

// Busca no banco de dados tudo que está entre as datas de buscas e imprime
$query = "SELECT * FROM pontos WHERE data_entrada BETWEEN '$data_busca1' AND '$data_busca2' ORDER BY data_entrada ASC";
$results_nomes = $mysqli->query($query);

while($rows_nomes = $results_nomes->fetch_assoc()){
    echo '<table class="tabela">
        <td>' . date('d/m/y', strtotime($rows_nomes['data_entrada'])) . '</td>';
}
?>