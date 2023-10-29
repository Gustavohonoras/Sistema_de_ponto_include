<?php
    session_start();
    include_once("conexao.php");

    if(isset($_POST['register'])){

        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])){
            $_SESSION["failed"] = "Os campos não podem ser vazios!";
            $_SESSION["name"] = "";
            $_SESSION["email"] = "";

            $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
            header("location: {$anterior}");
            exit;
        }
        else{
            $name = $mysqli->real_escape_string($_POST["name"]);
            $email = $mysqli->real_escape_string($_POST["email"]);
            $password = $mysqli->real_escape_string($_POST["password"]);

            $result = $mysqli->query("SELECT * FROM users WHERE name='$name'");
            $row = mysqli_fetch_assoc($result);

            if($row == 0){
                $result_usuario = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', sha1('$password') )";
                $resultado_usuario = $mysqli->query($result_usuario);

                header("Location: ../ponto/bater_ponto.php");
            }
            else {
                $_SESSION['failed'] = "Este nome já está registrado!";
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;

                $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                header("location: {$anterior}");
                exit;
            }
            
        }

    }

    elseif(isset($_POST['login'])) {

        /*if(empty($_POST["email"]) || empty($_POST["password"])){
            $_SESSION['failed'] = "Os campos não podem ser vazios!";
            $_SESSION['email'] = "";
            
            $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
            header("location: {$anterior}");
            exit;
        }
        else{
            $email = $mysqli->real_escape_string($_POST["email"]);
            $password = $mysqli->real_escape_string($_POST["password"]);

            $result = $mysqli->query("SELECT * FROM users WHERE name='$email' AND password=sha1('$password')");

            $row = mysqli_fetch_assoc($result);*/

            
            /*if($row['id'] == 1){
                $_SESSION['id'] = $row['id'];
                $_SESSION['admin'] = true;
                header("location: login_admin.php");
                exit;
            }
            elseif(is_array($row) && !empty($row)) {
                $_SESSION['id'] = $row['id'];
                header("location: index.php");
                exit;
            }*/
            /*if(is_array($row) && !empty($row)) {
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
            } 
            else {
                $_SESSION['failed'] = "Login ou senha inválidos!";
                $_SESSION['email'] = $email;

                $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                header("location: {$anterior}");
                exit;
            }*/
            if($_POST["email"] == "" || $_POST["password"] == ""){
                $_SESSION['failed'] = "Os campos não podem ser vazios!";
                $_SESSION['email'] = "";
    
                header("Location: index.php");
            }
            else{
                $email = $mysqli->real_escape_string($_POST["email"]);
                $password = $mysqli->real_escape_string($_POST["password"]);
    
    
                $result = mysqli_query($mysqli , "SELECT * FROM users WHERE email='$email' AND password=sha1('$password')");
    
                $row = mysqli_fetch_assoc($result);
    
                if(is_array($row) && !empty($row)) {
                    $_SESSION['id'] = $row['id'];
                    header("Location: ../ponto/bater_ponto.php");
                } 
                else {
                    $_SESSION['failed'] = "Login ou senha inválidos!";
                    $_SESSION['email'] = $email;
                    header("Location: index.php");
                    exit();
                }

            }
    }elseif(isset($_POST["login_adm"])) {
        if($_POST["email_adm"] == "" || $_POST["password_adm"] == ""){
            $_SESSION['failed'] = "Os campos não podem ser vazios!";
            $_SESSION['email_adm'] = "";

            header("Location: index.php");
        }
        else{
            $email_adm = $mysqli->real_escape_string($_POST["email_adm"]);
            $password_adm = $mysqli->real_escape_string($_POST["password_adm"]);


            $result = mysqli_query($mysqli , "SELECT * FROM adms WHERE email='$email_adm' AND password=sha1('$password_adm')");

            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)) {
                $_SESSION['id'] = $row['id'];
                header("Location: ../filtro/index.php");
            } 
            else {
                $_SESSION['failed'] = "Login ou senha inválidos!";
                $_SESSION['email'] = $email;
                header("Location: login_adm.php");
                exit();
            }

        }

    }

    elseif(isset($_POST['update'])){
        if(empty($_POST['name']) && empty($_POST['email'])){
            $_SESSION['failed'] = "Os campos não podem ser vazios!";
            $_SESSION['email'] = "";
            $_SESSION['name'] = "";

            $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
            header("location: {$anterior}");
            exit;
        }
        else{
            $name = $mysqli->real_escape_string($_POST['name']);
            $email = $mysqli->real_escape_string($_POST['email']);
            $password = $mysqli->real_escape_string($_POST['password']);
            $oldpassword = sha1($mysqli->real_escape_string($_POST['oldpassword']));

            $id = $_SESSION['id'];	
            $result = $mysqli->query("SELECT * FROM users WHERE id='$id' ");
            $row = mysqli_fetch_assoc($result);

            if($name == $row['name'] && $email == $row['email'] && sha1($password) == $row['password']){
                $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                header("location: {$anterior}");
                exit;
            }
            else{

                $result_name = $mysqli->query("SELECT * FROM users WHERE name='$name' AND id != '$id' ");
                $row_name = mysqli_fetch_assoc($result_name);

                $result_email = $mysqli->query("SELECT * FROM users WHERE email='$email' AND id != '$id'");
                $row_email = mysqli_fetch_assoc($result_email);

                if($row_name >= 1 and $row_email >= 1){
                    $_SESSION['failed'] = "Este nome e email já estão registrados!";
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;

                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");
                    exit;
                }

                elseif($row_name >= 1){
                    $_SESSION['failed'] = "Este nome já está registrado!";
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;

                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");
                    exit;
                }

                elseif($row_email >= 1){
                    $_SESSION['failed'] = "Este email já está registrado!";
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;

                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");
                    exit;
                }
                else{
                    if($oldpassword == $row['password']){
                        if(empty($password)){
                            $password = $row['password'];
                        }
                        else{
                            $password = sha1($password);
                        }

                        $result = $mysqli->query("UPDATE users SET email='$email', name='$name', password='$password' WHERE id='$id'")
                        or die("Could not execute the insert query.");

                        $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                        header("location: {$anterior}");
                        exit;
                    }
                    else{
                        $_SESSION['failed'] = "Senha incorreta!";
                        $_SESSION['email'] = $email;
                        $_SESSION['name'] = $name;

                        $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                        header("location: {$anterior}");
                        exit;
                    }
                    
                }
            }
        }
    }

    elseif(isset($_POST['logout'])){
        session_destroy();

        header("location: index.php");
        exit;
    }

    elseif(isset($_POST['delete'])){

        $id = $mysqli->real_escape_string($_POST['id']);

        $result = $mysqli->query("DELETE FROM users WHERE id='$id'") or die("Não foi possível deletar o usuário");
        session_destroy();

        $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
        header("location: {$anterior}");
        exit;

    }

    else{
        header("Location: index.php");
    }

?>