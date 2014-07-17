<?php

include './connect.php';

$id = $_GET['id'];
pg_query("DELETE FROM users WHERE id = $id");
header("location: usuarios.php");
