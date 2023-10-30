<?php
    session_start();
    include_once("conexao.php");
    
    

    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }

    $id = $_SESSION['id'];

    $query = "SELECT * FROM users WHERE id='$id' ";
    $result = $mysqli->query($query) or die("Falha na execução do código SQL: " . $mysqli->error);

    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <title>Bater Ponto</title>

</head>

<body>
    
    <header>
        <a href="../login/index.php" ><img src="image/logoinclude.svg" alt="logo-include" id="logo-include"></a>
        <h1>Seja bem vindo <?php echo $row['name'];?>! Tenha um ótimo dia de trabalho!</h1>
        <form method="POST" action="../login/processar.php">
        <div><input class="banner__button" type="submit" name="logout" value="logout"></div>
        </form>
    </header>

    <div class="caixa">
        <main>
            <div id="div-day-date">
                <div class="day text" id="day">Sexta-Feira</div>,
                <div class="date text" id="date">25/04/2023</div>
            </div>

            <div class="time text" id="time">20:35:45</div>

            <div class="container">
                <form action="registrar_entrada.php" method="post" class="box-timer">
                    <button id="first-button">Registrar Entrada</button>
                    <div id="seccond-box">
                        <p class="register-text registerButton">Registro da Entrada</p>
                        <div class="time text" id="timer-enter"></div>
                    </div>
                </form>

                <form action="registrar_saida.php" method="post" class="box-timer">
                    <button id="registerButton">Registrar Saída</button>
                    <div id="seccond-box">
                        <p class="register-text">Registro de Saída</p>
                        <div class="time text" id="timer"></div>
                    </div>
                </form>
            </div>
            <div>
                <?php
                    if (isset($_SESSION['mensagem'])) {
                        $mensagem = $_SESSION['mensagem'];
                        $classe_mensagem = 'success-message';
                        if (strpos($mensagem, 'Erro') !== false) {
                            $classe_mensagem = 'error-message';
                        }

                    echo '<div class="' . $classe_mensagem . '">' . $mensagem . '</div>';
                    unset($_SESSION['mensagem']);
                    }
                ?>
            </div>
        </main>

        <aside id="history">
            <h1>Ultimos registros</h1>
            <?php
                $result = $mysqli->query("SELECT * FROM pontos WHERE user_id = '$id' ORDER BY id DESC LIMIT 5");
                while($row_date = mysqli_fetch_assoc($result)){
                $data_entrada = $row_date['data_entrada'];
                $entrada = $row_date['entrada'];
                $saida = $row_date['saida'];
            ?>
            <div class="table-container">
                <table class="table-item">
                    <tr>
                        <p class="paragraph"><?php echo $data_entrada;?></p>
                        <td>Entrada:</td>
                        <td><?php echo $entrada;?></td>
                    </tr>

                    <tr>
                        <td>Saída:</td>
                        <td><?php echo $saida;?></td>
                    </tr>
                </table>
            </div>
            <?php
                }
            ?>
        </aside>
    </div>
    
    <footer class="footer">
        <img src="image/copyright.png" alt="">
        <p class="footer__text">Produzido pelos trainees da Include</p>
    </footer>

    <script src="./script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>