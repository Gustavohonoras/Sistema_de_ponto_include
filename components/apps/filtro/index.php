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
    <title>Buscar Funionário</title>
</head>

<body>
    <header>
        <a href="../login/index.php" ><img src="image/logoinclude.svg" alt="logo-include" id="logo-include"></a>
        <h2>Painel do Supervisor</h2>
        <form method="POST" action="../login/processar.php">
        <div><input class="banner__button" type="submit" name="logout" value="Logout"></div>
        </form>
    </header>

    <div class="container">
        <main>

            <div id="div-day-date">
                <div class="day text" id="day">Sexta-Feira</div>,
                <div class="date text" id="date">25/04/2023</div>
            </div>

            <div class="time text" id="time">20:35:45</div>

            <div class="div-main">
                <form action="test.php" method="POST">
                    <?php
                    include_once("conexao.php");

                    ?>
                    <div>
                        <h2 class="text_h2">Consultar Funcionário: </h2>
                        <input class="input" type="text" name="nome" placeholder="Nome do funcionário" value="">
                        <input class="input" type="date" name="data_busca1" min="2023-01-01" placeholder="De:" value="">
                        <input class="input" type="date" name="data_busca2" max="2100-12-31" placeholder="Até:" value="">
                        <input class="banner__button" type="submit" value="Filtrar" name="filtrar">
                    </div>
                </form>

                <form method="POST" action="../login/processar.php" name="register">
                    <?php
                        include_once("conexao.php");
                    ?>
                    <div class="supervisor__content">
                        <h2 class="text_h2"> Cadastrar Funcionário: </h2>
                        <input class="input" type="text" name="name" placeholder="Nome: ">
                        <input class="input" type="text" name="email" placeholder="Email: ">
                        <input class="input" type="password" name="password" placeholder="Senha: ">
                        <input class="banner__button" type="submit" name="register" value="Register">
                    </div>
            </div>
        </form>
        </main>
    </div>

    <footer class="footer">
        <img src="image/copyright.png" alt="">
        <p class="footer__text">Produzido pelos trainees da Include</p>
    </footer>

    <script src="./script.js"></script>
</body>

</html>