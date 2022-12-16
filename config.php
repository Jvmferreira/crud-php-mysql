<?php

$conexao = new mysqli('localhost:3306','root','','cadastros_crud');

if($conexao->connect_errno)
{
    echo"Errou em alguma parada";
}
else
{
    echo"Conexão rodando redondinha";
}

?>