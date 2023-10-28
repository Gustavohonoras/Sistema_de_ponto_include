<?php
// Nome fornecido pelo usuário
$nome_busca = $_POST['nome_busca'];

// Conexão com o servidor
$hostname = "localhost";
$dbname = "ponto";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $dbname);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!isset($_SESSION)) {
    session_start();
}

// Busca no banco de dados por nome
$query = "SELECT * FROM pontos WHERE nome = '$nome_busca'";
$results_nomes = $mysqli->query($query);

echo '<table class="tabela">';
while ($rows_nomes = $results_nomes->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . date('d/m/y', strtotime($rows_nomes['data_entrada'])) . '</td>';
    echo '<td>' . $rows_nomes['nome'] . '</td>';
    // Adicione aqui outras colunas que deseja mostrar
    echo '</tr>';
}
echo '</table>';

$mysqli->close(); // Feche a conexão com o banco de dados
?>