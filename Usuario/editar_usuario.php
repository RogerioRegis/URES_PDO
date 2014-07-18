<?php
include '../connect.php';

$id = $_POST['id'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$permissao = $_POST['permissao'];

if ($id and $login and $senha) {
    pg_query("UPDATE users SET (login,senha,permissao) = ('$login','$senha','$permissao') WHERE id = $id");
    header("location: ../Usuario/listar_usuarios.php");
}

include '../header.php';
include '../menu.php';
?>

<title>Editar Usuario</title>
<div class="col-lg-15">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>"
        <label>
            Novo Email: <input name="login" value="<?= $_GET['login'] ?>"/>
            Nova Senha: <input name="senha" value="<?= $_GET['senha'] ?>"/>
            
       
            <button class="btn btn-success" type="submit">Enviar</button >
            <button class="btn btn-default" href="usuarios.php">Cancelar</button >
            <br /><br />
            
            Nível de Acesso: 
            <input type="radio" name="permissao" value="<?= $_GET['permissao'] ?>"> Administrador</label>
            <input type="radio" name="permissao" value="<?= $_GET['permissao'] ?>"> Visitante</label>
    </form>
</div>


<?php
include '../footer.php';
