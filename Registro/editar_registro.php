<?php
include '../connect.php';

$id = $_GET['id'];
$query = 'SELECT * FROM registros WHERE id = :id';

$stmt = $conn->prepare($query);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_OBJ);

$name = $_POST['nome'];
$tipo_id = $_POST['tipo_id'];

if (isset($_POST['id']) and isset($_POST['nome']) and isset($_POST['tipo_id'])) {

    $query = 'UPDATE registros SET (name,tipo_id) = (:nome,:tipo_id) WHERE id = :id';

    try {
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->bindValue(':nome', $name, PDO::PARAM_STR);
        $stmt->bindValue(':tipo_id', $tipo_id, PDO::PARAM_STR);
        $stmt->execute();

        header("location: ../Registro/listar_registro.php");
    } catch (PDOexception $exp) {
        echo $exp->getMessage();
    }
}

//if ($id and $name and $tipo_id) {
//    pg_query("UPDATE registros SET (name,tipo_id) = ('$name','$tipo_id') WHERE id = $id");
//    header("location: ../Registro/listar_registro.php");
//}

include_once '../header.php';
include_once '../menu.php';
?>

<title>Editar Nome</title>

<div class="col-lg-15">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>"
               <label>Novo nome:
            <input name="nome" value="<?= $row->name ?>"/>
            <label class="control-label">
                Tipo: 
                <?php
                $pg_sql = 'SELECT * from tipo';
                try {
                    $read = $conn->prepare($pg_sql);
                    $read->execute();
                } catch (PDOexception $exp) {
                    echo $exp->getMessage();
                }
                ?>
                <select class="form-control" name="tipo_id">
                    <?php while ($option = $read->fetch(PDO::FETCH_OBJ)) : ?>
                        <option value="<?= $option->id; ?>"><?= $option->tipo; ?></option>
                    <?php endwhile; ?>
                </select>
            </label>
            <button class="btn btn-success" type="submit">Salvar</button >
            <button class="btn btn-default" href="../Registro/listar_registro.php">Cancelar</button >
            <hr />
    </form>
</div>

<?php
include_once '../footer.php';
