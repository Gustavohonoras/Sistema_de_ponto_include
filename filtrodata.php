<?php
// Solicitação das datas
session_start();
include_once("conexao.php");

//transformar o type date para string
function transformDate($startDate, $endDate) {
    if (!empty($startDate) && !empty($endDate)) {
        $startDate = new DateTime($startDate);
        $endDate = new DateTime($endDate);

        $data1 = $startDate->format("Y-m-d");
        $data2 = $endDate->format("Y-m-d");

        return [$data1, $data2]; // Retorna um array com as datas formatadas
    } else {
        return false; // Retorna false se as datas estiverem vazias
    }
}

$date1 = $_POST['data_busca1'];
$date2 = $_POST['data_busca2'];
$nome = $_POST['nome'];

if (isset($date1) && isset($date2)) {
    $formattedDates = transformDate($date1, $date2);

    if ($formattedDates) {
        $data_busca1 = $formattedDates[0];
        $data_busca2 = $formattedDates[1];
    } else {
        echo 'Coloque datas válidas'; 
        exit;
    }
}

// Busca no banco de dados tudo que está entre as datas de buscas e imprime
$query = "SELECT * FROM pontos WHERE data_entrada AND nome BETWEEN '$data_busca1' AND '$data_busca2' ORDER BY data_entrada ASC";
$results_nomes = $mysqli->query($query);

while($rows_nomes = $results_nomes->fetch_assoc()){
    echo '<table class="tabela">
        <td>' . date('d/m/y', strtotime($rows_nomes['data_entrada'])) . '<p>'.$rows_nomes['id'].'</p>''</td>';
}


?> 