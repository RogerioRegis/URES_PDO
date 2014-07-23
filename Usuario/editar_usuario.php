<?php
include '../connect.php';

include '../puxar.php';
$row = pull('users', 'id', $conn, $_GET['id']);

$id = $_POST['id'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$permissao = $_POST['permissao'];

if (isset($_POST['id']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['permissao'])) {
    $query = 'UPDATE users SET (login,senha,permissao) = (:login,:senha,:permissao) WHERE id = :id';
    try {
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
        $stmt->bindValue(':permissao', $permissao, PDO::PARAM_STR);
        $stmt->execute();

        header("location: ../Usuario/listar_usuarios.php");
    } catch (PDOexception $exp) {
        echo $exp->getMessage();
    }
}

include '../header.php';
include '../menu.php';
?>

<title>Editar Usuario</title>
<div class="col-lg-15">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $row->id ?>"
               <label>
            Novo Email: <input name="login" value="<?= $row->login ?>"/>
            Nova Senha: <input name="senha" value="<?= $row->senha ?>"/>


            <button class="btn btn-success" type="submit">Enviar</button >
            <button class="btn btn-default" href="../Usuario/listar_usuarios.php">Cancelar</button >
            <br /><br />

            Nível de Acesso: 
            <input type="radio" name="permissao" value="<?= $row->permissao ?>"> Administrador</label>
        <input type="radio" name="permissao" value="<?= $row->permissao ?>"> Visitante</label>
    </form>
</div>


<?php
include '../footer.php';
