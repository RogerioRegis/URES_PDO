<?php

include '../connect.php';

$id = $_POST['id'];
$tipo = $_POST['tipo'];

if (isset($_POST['tipo'])) {
    $query = 'INSERT INTO tipo(tipo) VALUES (:tipo)';
    try {
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':tipo', $tipo, PDO::PARAM_STR);
        $stmt->execute();

        header("location: ../Tipo/listar_tipo.php");
    } catch (PDOexception $exp) {
        echo $exp->getMessage();
    }
}

//    if ($tipo) {
//        pg_query("INSERT INTO tipo(tipo) VALUES ('$tipo')");
//        header("location: listar_tipo.php");
//    }

include_once '../header.php';
include_once '../menu.php';
?>

<title>Inserir na Lista</title>

<div class="col-lg-15">
    <form method="post" id="formlogin" name="formlogin" >
        <label>TIPO: <input name="tipo" /></label>
        <button class="btn btn-success" type="submit">Enviar</button >
        <button class="btn btn-default" href="listar_tipo.php">Cancelar</button ><hr />
    </form>  
</div>

<?php

include_once '../footer.php';
