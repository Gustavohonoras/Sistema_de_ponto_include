<?php
session_start();
include_once("conexao.php");

// Obtenha os valores dos campos do formulário
$date1 = $_POST['data_busca1'];
$date2 = $_POST['data_busca2'];
$nome = $_POST['nome'];

// Função para tratar as datas
function tratamentodata($startDate, $endDate) {
    if (!empty($startDate) && !empty($endDate)) {
        $startDate = new DateTime($startDate);
        $endDate = new DateTime($endDate);

        $data1 = $startDate->format("Y-m-d");
        $data2 = $endDate->format("Y-m-d");

        return [$data1, $data2];
    } else {
        return false;
    }
}

// Função para realizar a pesquisa por data e nome
function filtrodata($data1, $data2, $nome) {
    global $mysqli; // Certifique-se de que $mysqli esteja definido corretamente no arquivo "conexao.php"

    if (!empty($data1) && !empty($data2)) {
        $formattedDates = tratamentodata($data1, $data2);

        if ($formattedDates) {
            $data_busca1 = $formattedDates[0];
            $data_busca2 = $formattedDates[1];

            // Use a pesquisa por nome na consulta SQL
            $query = "SELECT * FROM pontos WHERE data_entrada BETWEEN '$data_busca1' AND '$data_busca2' AND nome = '$nome' ORDER BY data_entrada ASC";
            $results_nomes = $mysqli->query($query);

            echo '<table class="tabela">';
            while ($rows_nomes = $results_nomes->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . date('d/m/y', strtotime($rows_nomes['data_entrada'])) . '</td>';
                // Adicione mais colunas à tabela conforme necessário
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Coloque datas válidas';
        }
    }
}
