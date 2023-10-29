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
            <img class="header__img1" src="image/logoinclude.svg" alt="">
            <h1>Acesso supervisor</h1>
            <form method="POST" action="../login/processar.php">
                <div id="voltar"><input type="submit" name="voltar" value="Voltar"></div>
            </form>
        </div>
        
    </header>
   
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
    
    <section class="banner_supervisor">

        <form method="POST" action="processar.php" name="login_adm">
                <?php
                    include_once("conexao.php");

                
                ?>
            <div class="supervisor__content">
                <input class="email_style" type="text" name="email_adm" placeholder="Email: ">
                <input class="password_style" type="password" name="password_adm" placeholder="Senha: ">
                <input class="banner__button" type="submit" name="login_adm" value="Login">
            </div>
        </form>
    </section>

    <section class="about">
        <div class="about__content">
            <h2 class="about__title">Quem somos nós?</h2>
            <p class="about__text text1">Estudantes de T.I do campus de Russas no processo seletivo para sermos patinhos desenvolvemos <br> esse sistema que tem como funcionalidade registrar as horas trabalhadas pelos funcionários de sua empresa.</p>
        </div>
    </section>

    <footer class="footer">
        <p class="footer__text">Empresa ufc.ltda CNPJ:22451998.41</p>
    </footer>
</body>
</html>