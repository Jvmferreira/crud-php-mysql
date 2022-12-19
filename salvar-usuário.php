<?php

switch($_REQUEST["acao"]){
    case'cadastrar':
    $nome= $_POST["nome"];
    $email=$_POST["email"];
    $senha= $_POST["senha"];
    $data_nasc=$_POST["data_nasc"];


    $sql="INSERT INTO usuários(nome,email, senha, data_nasc values('{$nome}','{$email}',''{$senha}','{$data_nasc}')";

    $res = $conexao->query($sql);

    break;

    case "editar":
        $nome= $_POST["nome"];
        $email=$_POST["email"];
        $senha= $_POST["senha"];
        $data_nasc=$_POST["data_nasc"];

        sql="UPDATE usuários SET
        nome='{$nome}',
        email='{$email}',
        senha='{$senha}',
        data_nasc='{$data_nasc}',

        WHERE
        id=".$_REQUEST["id"];

        $res =$conexao->query($sql);

        if($res==true){
            print "<script>alert('Usuário Editado com Sucesso');</script>";
            print "<script>location.href='? page=listar';</script>";
        }

        break;
        case "excluir":
            
            $sql ="DELETE *FROM usuários WHERE id=".$_REQUEST["id"];

            $res= $conexao->query($sql);

            if($res==true){
                print"<script>alert('Usuário excluido com sucesso');</script>";
            }
            else{
               print "<script>alert('Não é possível excluir')</script>";
               print"<script>location.href='?page=listar;</script>"; 
            }

            break;
}

?>