<?php

include './conect.php';

$id = $_GET['id'];

pg_query("DELETE FROM registros WHERE id = $id");

header("location: index.php");
