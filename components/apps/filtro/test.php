<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <title>Filtros</title>
</head>
<body>
    <header>
        <a href="../login/index.php" ><img src="image/logoinclude.svg" alt="logo-include" id="logo-include"></a>
        <h2>Filtros</h2>
        <form method="POST" action="../login/processar.php">
        <div><input class="banner__button" type="submit" name="logout" value="Logout"></div>
        </form>
    </header>

    <main>
        <br>
        <h1> Pontos batidos: </h1>
        <?php
        include("filtro.php");
        if(!isset($_SESSION['id'])){
            header("Location: ../login.php");
        }

        if(isset($_POST['filtrar'])){
            filtrodata($date1,$date2, $nome);
        }
    ?>
    </main>
    
    <footer class="footer1">
        <img src="image/copyright.png" alt="">
        <p class="footer__text">Produzido pelos trainees da Include</p>
    </footer>
</body>
</html>