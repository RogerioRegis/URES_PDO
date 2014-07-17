<?php

include './connect.php';

$email = $_POST['login'];
$senha = $_POST['senha'];

if ($email and $senha) {
    pg_query("INSERT into users(login, senha) values('$email','$senha');");
    header("location: usuarios.php");
}

include_once './header.php';
include_once './menu.php';
?>

<title>Novo Usuário</title>

<p class="text-info">Formulário de Novo Usuário</p>

<form method="POST">
    <div class="form">
        <input type="email" name="login" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="password" name="senha" class="form-control" placeholder="Senha">
    </div>
    <button class="btn btn-default">Enviar</button>
</form>
<br />

<?php
include_once './footer.php';
