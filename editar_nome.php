<?php
include './conect.php';

$id = $_POST['id'];
$name = $_POST['nome'];
$tipo_id = $_POST['tipo_id'];

if ($id and $name and $tipo_id) {
    pg_query("UPDATE registros SET (name,tipo_id) = ('$name','$tipo_id') WHERE id = $id");
    header("location: index.php");
}
?>
<?php include_once './header.php'; ?>
<?php include_once './menu.php'; ?>
<title>Editar Nome</title>
<div class="col-lg-15">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>"
               <label>Novo nome: <input name="nome" value="<?= $_GET['name'] ?>"/>
                   Novo Tipo: <input name="tipo_id" value="<?= $_GET['tipo_id'] ?>"/>
            <button class="btn btn-success" type="submit">Salvar</button >
            <button class="btn btn-default" href="index.php" type="submit">Cancelar</button ><hr />
    </form>
</div>

<?php include_once './footer.php';