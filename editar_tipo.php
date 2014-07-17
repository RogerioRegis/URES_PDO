<?php
include './connect.php';

$id = $_POST['id'];
$tipo = $_POST['tipo'];

if ($id and $tipo) {
    pg_query("UPDATE tipo SET tipo = '$tipo' WHERE id = $id;");
    header("location: tipo.php");
}
?>
<?php include_once './header.php'; ?>
<?php include_once './menu.php'; ?>
<title>Editar Tipo</title>
<div class="col-lg-15">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>"
               <label>Nova TIPO: <input name="tipo" value="<?= $_GET['tipo'] ?>"/></label>
            <button class="btn btn-success" type="submit">Enviar</button >
            <button class="btn btn-default" href="usuarios.php">Cancelar</button ><hr />
    </form>
</div>

<?php include_once './footer.php'; ?>