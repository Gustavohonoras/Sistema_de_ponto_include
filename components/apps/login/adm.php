<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Supervisor</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/reset.css">
    <script type="text/javascript" src="scripts/index.js" defer></script>
</head>
<body>
    <header class="header">
        <div class="header__content1">
            <a href="index.php" ><img class="header__img1" src="image/logoinclude.svg" alt=""></a>
            <h2>Acesso supervisor</h2>
            <form method="POST" action="../login/processar.php">
                <div><input class="banner__button" type="submit" name="voltar" value="Voltar"></div>
            </form>
        </div>
        
    </header>
    
    <section class="banner_supervisor">

    <form method="POST" action="processar.php" name="login_adm">
                <?php
                    include_once("conexao.php");

                
                ?>
            <div class="supervisor__content">
                <h2 class="text_h2"> Login Supervisor: </h2>
                <input class="email_style" type="text" name="email_adm" placeholder="Email: ">
                <input class="password_style" type="password" name="password_adm" placeholder="Senha: ">
                <input class="banner__button" type="submit" name="login_adm" value="Login">
            </div>
        </form>

    </section>

    <footer class="footer">
        <p class="footer__text">Produzido pelos trainees da Include</p>
    </footer>
</body>
</html>