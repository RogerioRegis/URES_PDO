<?php

$dbname = "sicaes";
$host = "localhost";
$user = "sicaes";
$password = "sicaes";

//$conn = new PDO("pgsql: dbname = $dbname; host = $host", "$user", "$password")
//        or die("Não foi possivel se conectar!");

$conn = pg_connect("host=$host user=$user password=$password dbname=$dbname")
        or die("Nao conectou!");
