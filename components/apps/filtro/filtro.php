<?php
session_start();
include_once("conexao.php");

// Obtenha os valores dos campos do formulário
$date1 = $_POST['data_busca1'];
$date2 = $_POST['data_busca2'];
$nome = $_POST['nome'];

<<<<<<< HEAD
=======
filtrodata($nome,$date1,$date2);
>>>>>>> 704ae98cb991dd56e1b7cb803351649e147cd7d7
// Função para tratar as datas
function tratamentodata($startDate, $endDate) {
    if (!empty($startDate) && !empty($endDate)) {
        $startDate = new DateTime();
        $endDate = new DateTime();

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

<<<<<<< HEAD
            $result = $mysqli->query("SELECT * FROM users WHERE name='$nome' ");
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];

            // Use a pesquisa por nome na consulta SQL
            $query = "SELECT * FROM pontos WHERE data_entrada BETWEEN '$data_busca1' AND '$data_busca2' AND user_id='$id' ORDER BY data_entrada ASC";
=======
            // Use a pesquisa por nome na consulta SQL
            $query = "SELECT * FROM pontos WHERE data_entrada BETWEEN '$data_busca1' AND '$data_busca2' AND nome = '$nome' ORDER BY data_entrada ASC";
>>>>>>> 704ae98cb991dd56e1b7cb803351649e147cd7d7
            $results_nomes = $mysqli->query($query);

            echo '<table class="tabela">';
            while ($rows_nomes = $results_nomes->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . date('d/m/y', strtotime($rows_nomes['data_entrada'])) . '</td>';
<<<<<<< HEAD
                echo '<td>' . $rows_nomes['entrada'] . '</td>';
                echo '<td>' . $rows_nomes['saida'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
=======
>>>>>>> 704ae98cb991dd56e1b7cb803351649e147cd7d7
                // Adicione mais colunas à tabela conforme necessário
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Coloque datas válidas';
        }
    }
}
