<?php

include '../connect.php';

$id = $_GET['id'];
pg_query("DELETE FROM registros WHERE id = $id");
header("location: ../Registro/listar_registro.php");