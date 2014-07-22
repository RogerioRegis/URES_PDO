<?php
// chama a conexao com o banco de dados
include '../connect.php';

// pega o objeto no banco
include '../puxar.php';
$row = puxar('tipo', 'id', $conn, $_GET['id'] );

// armazena dados nas variáveis
$id = $_POST['id'];
$tipo = $_POST['tipo'];

// verifica se o formulario foi preenchido
if (isset($id) && isset($tipo)) {
    // atualiza no banco de dados
    $query = 'UPDATE tipo SET (tipo) = (:tipo) WHERE id = :id';
    try {
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->bindValue(':tipo', $tipo, PDO::PARAM_STR);
        $stmt->execute();

        header("location: ../Tipo/listar_tipo.php");
    } catch (PDOexception $exp) {
        echo $exp->getMessage();
    }

}

// adiciona cabecalho e menu
include_once '../header.php';
include_once '../menu.php';
?>

<title>Editar Tipo</title>
<div class="col-lg-15">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $row->id ?>"
               <label>Nova TIPO: <input name="tipo" value="<?= $row->tipo ?>"/></label>
        <button class="btn btn-success" type="submit">Enviar</button >
        <button class="btn btn-default" href="../Tipo/listar_tipo.php">Cancelar</button >
        <hr />
    </form>
</div>

<?php
include_once '../footer.php';
