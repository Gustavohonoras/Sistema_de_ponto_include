<?php
    session_start();

    date_default_timezone_set('America/Sao_Paulo');
    $horario_atual = date('H:i:s');

    $data_entrada = date('Y/m/d');

    include_once('conexao.php');

    $id_user = $_SESSION['id'];

    $query_ponto = "SELECT id, saida
                    FROM pontos
                    WHERE user_id = :user_id
                    ORDER BY id DESC
                    LIMIT 1";
    $result_ponto = $conn->prepare($query_ponto);
    $result_ponto->bindParam(':user_id', $id_user);
    $result_ponto->execute();

    if(($result_ponto) and ($result_ponto->rowCount() != 0)){
        $row_ponto = $result_ponto->fetch(PDO::FETCH_ASSOC);
        extract($row_ponto);

        if(($saida == "") or ($saida == null)){
            $col_tipo_registro = "saida";
            $tipo_registro = "editar";
            $text_tipo_registro = "saída";
        }else{
            $tipo_registro = "entrada";
            $text_tipo_registro = "entrada";
        }
    }else{
        $tipo_registro = "entrada";
        $text_tipo_registro = "entrada";
    }

    $cad_horario = null; // Inicialize a variável $cad_horario aqui

    switch($tipo_registro){
        case "entrada":
            $query_horario = "INSERT INTO pontos (data_entrada, entrada, user_id) VALUES (:data_entrada, :entrada, :user_id)";
            $cad_horario = $conn->prepare($query_horario);
            $cad_horario->bindParam(":data_entrada", $data_entrada);
            $cad_horario->bindParam(":entrada", $horario_atual);
            $cad_horario->bindParam(":user_id", $id_user);
            break;
    }

    if ($cad_horario) { // Verifique se $cad_horario não é nulo
        $cad_horario->execute();
        if ($cad_horario->rowCount()) {
            $_SESSION['mensagem'] = "Horário de $text_tipo_registro cadastrado com sucesso!";
        } else {
            $_SESSION['mensagem'] = "Erro: Horário de entrada já cadastrado!";        
        }
    } else {
        $_SESSION['mensagem'] = "Erro: Horário de entrada já cadastrado!";   
    }
    sleep(2);
    header("Location: index.php");
    exit;
?>
