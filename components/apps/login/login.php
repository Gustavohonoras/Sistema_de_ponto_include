<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
</head>
<body>
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

        <label for="email">email: </label>
        <input type="text" name="email" placeholder="Digite Email completo aqui">

        <label for="password">Senha: </label>
        <input type="password" name="password" placeholder="Digite sua senha aqui">

        <input type="submit" name="login">
    </form>

    <br>
    <br>
    <a href="register.php">Registrar Conta</a>
    <br>
    <a href="login_admin.php">Logar Admin</a>
    
</body>
</html>