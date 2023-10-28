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
        <button class="header__button1" type="button">Acesso Surpevisor</button>
        <button class="header__button2" type="button">Bater Ponto</button>
        </div>
        
    </header>
    
    <dialog class="modal">
        <div class="modal__container">
            <div class="buttonAndTitle">
              <button type="button" class="modal__close"><img src="image/Frame 9.svg" alt=""></button>
              <h1 class="modal__title">Login</h1>  
            </div>

            <form method="POST" action="processar.php">
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
                    <input type="submit" name="login">
                </div>
              
                <div class="modal__buttons">
                <button class="modal__button1">Entrar</button>
                </div>
          
            </form>
        </div>
    </dialog>

    <dialog class="modal__register">
        <div class="modal__container2">
            <div class="buttonAndTitle2">
              <button type="button" class="modal__close2"><img src="image/Frame 9.svg" alt=""></button>
              <h1 class="modal__title2">Login</h1>  
            </div>

            <form action="" >
                <div class="modal__inputs2">
                <input type="text" placeholder="Nome completo" class="modal__name">
                <input type="text" placeholder="Email" class="modal__email">
                <input type="text" placeholder="Matrícula" class="modal__matricula">
                <input type="text" placeholder="Cpf" class="modal__cpf">
                <input type="text" placeholder='Senha' class="modal__password21">
                <input type="text" placeholder="Repetir senha" class="modal__password22">
                </div>
              
                <div class="modal__buttons2">
                <button class="modal__button12">Entrar</button>
                <button class="modal__button22">Já tenho Cadastro</button>  
                </div>
          
            </form>
        </div>
    </dialog>
    
    <section class="banner">
        <div class="banner__content">
            <h1 class="banner__title title1 ">O <emseu></em> sistema gerencial de <em>bater ponto</em>.</h1>
            <p class="banner__text text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <button class="banner__button" type="button">Bater Ponto</button>
        </div>
    </section>

    <section class="about">
        <div class="about__content">
            <h2 class="about__title">Quem somos nós?</h2>
            <p class="about__text text1">Estudantes de T.I do campus de Russas no processo seletivo para sermos patinhos desenvolvemos esse sistema que tem como funcionalidade registrar as horas trabalhadas pelos funcionários de sua empresa.</p>
        </div>
    </section>

    <footer class="footer">
        <p class="footer__text">Empresa ufc.ltda CNPJ:22451998.41</p>
    </footer>
</body>
</html>