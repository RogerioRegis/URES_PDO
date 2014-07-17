<?php
include './connect.php';
$id = $_GET['id'];
pg_query("DELETE FROM tipo WHERE id = $id");
header("location: tipo.php");