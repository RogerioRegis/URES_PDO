<?php

$host     = "localhost";
$dbname   = "sicaes";
$user     = "sicaes";
$password = "sicaes";

$conn = pg_connect("host=$host user=$user password=$password dbname=$dbname")
        or die("Nao conectou!");