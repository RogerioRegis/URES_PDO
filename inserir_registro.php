<?php
include './connect.php';

$name = $_POST['nome'];
$tipo_id = $_POST['tipo_id'];

if ($name and $tipo_id) {
    pg_query("INSERT INTO registros(name,tipo_id) VALUES ('$name','$tipo_id')");
    header("location: listar_registro.php");
}

include_once './header.php';
include_once './menu.php';
?>

<title>Inserir na Lista</title>

<div class="col-lg-15">
    <form method="post" id="formlogin" name="formlogin" >
        <label>Nome: 
            <input name="nome" />
        </label>
        <label class="control-label">Tipo:        
            <?php $res = pg_query("SELECT * from tipo"); ?>
            <select class="form-control" name="tipo_id">
                <?php while ($row = pg_fetch_object($res)) : ?>
                    <option value="<?= $row->id; ?>"><?= $row->tipo; ?></option>
                <?php endwhile; ?>
            </select>
        </label>
        <button class="btn btn-success" type="submit">Enviar</button >
        <a href="index.php"><button class="btn btn-default" type="button">Cancelar</button ></a><hr />
    </form>  
</div>

<?php include_once './footer.php';