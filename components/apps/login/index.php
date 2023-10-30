<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BatePonto</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/reset.css">
    <script type="text/javascript" src="scripts/index.js" defer></script>
</head>
<body>
    <header class="header">
        <div class="header__content">
            <img class="header__img" src="image/logoinclude.svg" alt="">
            <a id="link_supervisor" href="adm.php"><button class="header__button1" type="button">Acesso Surpevisor</button></a>
        <button class="header__button2" type="button">Bater Ponto</button>
        </div>
        
    </header>
    
    <dialog class="modal">
    <div class="modal__container">
        <div class="buttonAndTitle">
            <button type="button" class="modal__close">
                <img src="image/Frame 9.svg" alt="">
            </button>
            <h1 class="modal__title">Login</h1>
        </div>

        <form method="POST" action="processar.php" name="login">
            <?php
                include_once("conexao.php");

                if(isset($_SESSION["failed"])){
                    $email = $_SESSION["email"];

                    echo $_SESSION['failed'];
                }
                else{
                    $email = "";
                }
                unset($_SESSION['failed'], $_SESSION['email']);

            ?>

            <div class="modal__inputs">
                <input type="text" name="email" placeholder="Email: " class="modal__input">
                <input type="password" name="password" placeholder="Senha: " class="modal__password">
                <input class="modal__button1" type="submit" name="login" value="Login">
                
            </div>
        </form>
    </div>
</dialog>
   
    <dialog class="modal__register">
        <div class="register__container">
            <div class="register__title--button">
              <button type="button" class="register__close"><img src="image/Frame 9.svg" alt=""></button>
              <h1 class="register__title">Cadastro</h1>  
            </div>

            <form action="" >
                <div class="register__inputs">
                <input type="text" placeholder="Nome completo" class="register__name">
                <input type="text" placeholder="Email" class="register__email">
                <input type="text" placeholder='Senha' class="register__password">
                </div>
              
                <div class="modal__buttons2">
                <button class="register__button">Cadastrar</button> 
                </div>
          
            </form>
        </div>
    </dialog>
    
    <section class="banner">
        <div class="banner__content">
            <h1 class="banner__title title1 ">O <emseu></em> sistema gerencial de <em>bater ponto</em>.</h1>
            <p class="banner__text text1"> Bate Ponto Include: Seu aliado para o controle de horários.<br> Registre sua jornada de trabalho de maneira simples e eficaz.</p>
            <button class="banner__button" type="button">Bater Ponto</button>
        </div>
    </section>

    <section class="about">
        <div class="about__content">
            <h2 class="about__title">Quem somos nós?</h2>
            <p class="about__text text1">Estudantes de T.I do campus de Russas no processo seletivo para sermos patinhos desenvolvemos <br> esse sistema que tem como funcionalidade registrar as horas trabalhadas pelos funcionários de sua empresa.</p>
        </div>
    </section>

    <footer class="footer">
        <img src="image/copyright.png" alt="">
        <p class="footer__text">Produzido pelos trainees da Include</p>
    </footer>
</body>
</html>