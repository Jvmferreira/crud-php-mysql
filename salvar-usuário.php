<?php

switch($_REQUEST["acao"]){
    $nome= $_POST["nome"];
    $email=$_POST["email"];
    $senha= $_POST["senha"];
    $data_nasc=$_POST["data_nasc"];


    $sql="INSERT INTO usuarios(nome,email, senha, data_nasc values('{$nome}','{$email}',''{$senha}','{$data_nasc}')";

    $res = $conexao->query($sql);

    break;

    case "editar":
        ////
        break;
        case "excluir":
            ///
            break;
}






?>