<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST" action="processar.php">

        <?php
            include_once("conexao.php");

            if(isset($_SESSION["failed"])){
                $name = $_SESSION["name"];
                $email = $_SESSION["email"];
            
                echo $_SESSION['failed'];
            }
            else{
                $name = "";
                $email = "";
            }
            unset($_SESSION['failed'], $_SESSION['name'], $_SESSION['email'])

        ?>


        <label for="name">Nome: </label>
        <input type="text" name="name" placeholder="Digite seu nome aqui" value="<?php echo $name?>">

        <label for="email">Email: </label>
        <input type="text" name="email" placeholder="Digite seu Email completo aqui" value="<?php echo $email?>">

        <label for="password">Senha: </label>
        <input type="password" name="password" placeholder="Digite sua senha aqui">

        <input type="submit" name="register">
    </form>
    
</body>
</html>