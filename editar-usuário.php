<h1>Editar Usuário</h1>

<?php

$sql="SELECT * FROM usuários WHERE id=".$_REQUEST["id"];

$res =$conexao->query($sql);

$row =$res->fetch_object();

?>

<form action="?page=salvar" metpod="POST">
<Imput type="hidden" name="acao" value="Cadastrar">

<div class ="mb-3">
    <label>Nome</label>
    <Imput type="text" name="nome" class="form-control" value ="<?php print $row-> nome;?>">
</div>

<div class ="mb-3">
    <label>E-mail</label>
    <imput type="email" name="email" class="form-control" value="<?php print $row->email;?>">
</div>

<div class="mb-3">
    <label>senha</label>
    <imput type="password" name="senha" class="form-control" maxlength=8 required>
</div>

<div class="mb-3">
    <label>Data de Nascimento</label>
    <imput type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc;?>">
</div>

<div class="mb-3">
    <imput type="btn btn-primary" type="submit">Enviar</button>
</div>

</form>