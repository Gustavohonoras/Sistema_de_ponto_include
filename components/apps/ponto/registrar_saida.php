<?php
    session_start();

    date_default_timezone_set('America/Sao_Paulo');
    $horario_atual = date('H:i:s');
    //var_dump($horario_atual);

    $data_entrada = date('Y/m/d');

    include_once('conexao.php');

    $id_user = $_SESSION['id'];

    $query_ponto = "SELECT id AS id_ponto, saida
                    FROM  pontos
                    WHERE user_id =:user_id
                    ORDER BY id DESC
                    LIMIT 1";
    $result_ponto = $conn->prepare($query_ponto);
    $result_ponto->bindParam(':user_id', $id_user);
    $result_ponto->execute();

    if(($result_ponto) and ($result_ponto->rowCount() != 0)){
        $row_ponto = $result_ponto->fetch(PDO::FETCH_ASSOC);
        //var_dump($row_ponto);
        extract($row_ponto);

        if(($saida == "") or ($saida == null)){
            $col_tipo_registro = "saida";
            $tipo_registro = "editar";
            $text_tipo_registro = "saída";
        }else{
            $tipo_registro = "entrada";
            $text_tipo_registro = "entrada";
        }
    }
    
    switch($tipo_registro){
        case "editar":
            $query_horario = "UPDATE pontos SET $col_tipo_registro =:horario_atual
                        WHERE id =:id
                        LIMIT 1";
        
        $cad_horario = $conn->prepare($query_horario);
        $cad_horario->bindParam(":horario_atual", $horario_atual);
        $cad_horario->bindParam(":id", $id_ponto);
        break;
    }

    $cad_horario->execute();
    if($cad_horario->rowCount()){
        echo "<p style='color: green;>Horario de $text_tipo_registro cadastrado com sucesso!<p>";
    }else{
        echo "<p style='color: #f00;>Horario de $text_tipo_registro não cadastrado com sucesso!<p>";

    }
?>  