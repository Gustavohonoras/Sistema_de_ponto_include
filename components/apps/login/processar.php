<?php
    session_start();
    include_once("conexao.php");

    if(isset($_POST['register'])){

        if($_POST["name"] == "" || $_POST["email"] == "" || $_POST["password"] == ""){
            $_SESSION["failed"] = "Os campos não podem ser vazios!";
            $_SESSION["name"] = "";
            $_SESSION["email"] = "";
            header("Location: cadastrar.php");
        }
        else{
            $name = $mysqli->real_escape_string($_POST["name"]);
            $email = $mysqli->real_escape_string($_POST["email"]);
            $password = $mysqli->real_escape_string($_POST["password"]);

            $result = mysqli_query($mysqli, "SELECT * FROM users WHERE name='$name'");
            $row = mysqli_fetch_assoc($result);

            if($row == 0){
                $result_usuario = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', sha1('$password') )";
                $resultado_usuario = mysqli_query($mysqli, $result_usuario);

                header("Location: login.php");
            }
            else {
                $_SESSION['failed'] = "Este nome já está registrado!";
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header("Location: register.php");
            }
            
        }

    }

    elseif(isset($_POST['login'])) {

        if($_POST["email"] == "" || $_POST["password"] == ""){
            $_SESSION['failed'] = "Os campos não podem ser vazios!";
            $_SESSION['email'] = "";

            header("Location: login.php");
        }
        else{
            $email = $mysqli->real_escape_string($_POST["email"]);
            $password = $mysqli->real_escape_string($_POST["password"]);


            $result = mysqli_query($mysqli , "SELECT * FROM users WHERE email='$email' AND password=sha1('$password')");

            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)) {
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
            } 
            else {
                $_SESSION['failed'] = "Login ou senha inválidos!";
                $_SESSION['email'] = $email;
                header("Location: login.php");
                exit();
            }


        }
    }
    elseif(isset($_POST['update'])){
        if(!empty($_POST['name']) && !empty($_POST['email'])){
            $name = $mysqli->real_escape_string($_POST['name']);
            $email = $mysqli->real_escape_string($_POST['email']);
            $password = $mysqli->real_escape_string($_POST['password']);
            $oldpassword = sha1($mysqli->real_escape_string($_POST['oldpassword']));

            $id = $_SESSION['id'];	
            $result = mysqli_query($mysqli, "SELECT * FROM users WHERE id='$id' ");
            $row = mysqli_fetch_assoc($result);

            if($name == $row['name'] && $email == $row['email'] && sha1($password) == $row['password']){
                header("Location: index.php");
            }
            else{

                $result_name = mysqli_query($mysqli, "SELECT * FROM users WHERE name='$name' AND id != '$id' ");
                $row_name = mysqli_fetch_assoc($result_name);

                $result_email = mysqli_query($mysqli, "SELECT * FROM users WHERE email='$email' AND id != '$id'");
                $row_email = mysqli_fetch_assoc($result_email);

                if($row_name >= 1 and $row_email >= 1){
                    $_SESSION['failed'] = "Este nome e email já estão registrados!";
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    header("Location: index.php");
                }

                elseif($row_name >= 1){
                    $_SESSION['failed'] = "Este nome já está registrado!";
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    header("Location: index.php");
                }

                elseif($row_email >= 1){
                    $_SESSION['failed'] = "Este email já está registrado!";
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    header("Location: index.php");
                }
                else{
                    if($oldpassword == $row['password']){
                        if(empty($password)){
                            $password = $row['password'];
                        }
                        else{
                            $password = sha1($password);
                        }

                        $result = mysqli_query($mysqli, "UPDATE users SET email='$email', name='$name', password='$password' WHERE id='$id'")
                        or die("Could not execute the insert query.");

                        header("Location: index.php");
                    }
                    else{
                        $_SESSION['failed'] = "Senha incorreta!";
                        $_SESSION['email'] = $email;
                        $_SESSION['name'] = $name;
                        header("Location: index.php");
                    }
                    
                }
            }
        }
        else{
            $_SESSION['failed'] = "Os campos não podem ser vazios!";
            $_SESSION['email'] = "";
            $_SESSION['name'] = "";

            header("Location: index.php");
        }
    }

    elseif(isset($_POST['logout'])){
        session_destroy();
        header("Location: login.php");
    }

    elseif(isset($_POST['delete'])){
        $id = $_SESSION['id'];

        $result = mysqli_query($mysqli, "DELETE FROM users WHERE id='$id'") or die("Não foi possível deletar o usuário");
        session_destroy();

        header("Location: login.php");

    }

    else{
        header("Location: login.php");
    }

?>