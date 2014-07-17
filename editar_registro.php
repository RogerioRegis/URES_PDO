<?php
include './connect.php';

$id = $_POST['id'];
$name = $_POST['nome'];
$tipo_id = $_POST['tipo_id'];

if ($id and $name and $tipo_id) {
    pg_query("UPDATE registros SET (name,tipo_id) = ('$name','$tipo_id') WHERE id = $id");
    header("location: index.php");
}
include_once './header.php';
include_once './menu.php';
?>

<title>Editar Nome</title>
<div class="col-lg-15">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>"
               <label>Novo nome: <input name="nome" value="<?= $_GET['name'] ?>"/>
            <label class="control-label">Tipo:        
                <?php $res = pg_query("SELECT * from tipo"); ?>
                <select class="form-control" name="tipo_id">
                    <?php while ($row = pg_fetch_object($res)) : ?>
                        <option value="<?= $row->id; ?>"><?= $row->tipo; ?></option>
                    <?php endwhile; ?>
                </select>
            </label>
            <button class="btn btn-success" type="submit">Salvar</button >
            <button class="btn btn-default" href="listar_registro.php" type="submit">Cancelar</button ><hr />
    </form>
</div>

<?php
include_once './footer.php';
