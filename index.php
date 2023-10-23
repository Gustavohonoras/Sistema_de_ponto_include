<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <?php
        include_once("conexao.php");

        if(!isset($_SESSION['id'])){
            header("Location: login.php");
        }

        $id = $_SESSION['id'];

        $query = "SELECT * FROM users WHERE id='$id' ";
        $result = $mysqli->query($query) or die("Falha na execução do código SQL: " . $mysqli->error);

        $row = $result->fetch_assoc();
    ?>
    <h1>Seja bem vindo <?php echo $row['name'];?></h1>

    <form method="POST" action="processar.php">
        <input type="submit" name="logout" value="logout">
        <input type="submit" name="delete" value="delete">
    </form>

    <br>
    <br>

    <form method="POST" action="processar.php">

        <?php
            if(isset($_SESSION["failed"])){
                $name = $_SESSION["name"];
                $email = $_SESSION["email"];
            
                echo $_SESSION['failed'];
            }

            unset($_SESSION['failed'], $_SESSION['email'], $_SESSION['name']);

        ?>

        <label for="name">Nome: </label>
        <input type="text" name="name" value="<?php echo $row['name'];?>">

        <label for="email">Email: </label>
        <input type="text" name="email" value="<?php echo $row['email'];?>">
 
        <label for="oldpassword">Senha antiga: </label>
        <input type="password" name="oldpassword" placeholder="Digite sua senha atual aqui">

        <label for="password">Senha Nova: </label>
        <input type="password" name="password" placeholder="Digite sua nova senha aqui">

        <input type="submit" name="update">

    </form>
</body>
</html>