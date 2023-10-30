<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testando dados</title>
</head>
<body>
    <?php
        include("filtro.php");
        if(!isset($_SESSION['id'])){
            header("Location: ../login.php");
        }

        if(isset($_POST['filtrar'])){
            filtrodata($date1,$date2, $nome);
        }
    ?>
    
</body>
</html>