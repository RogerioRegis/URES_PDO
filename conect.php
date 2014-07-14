<?php

$servidor = "localhost";
$usuario = "sicaes";
$senha = "sicaes";
$dbname = "sicaes";

$con = pg_connect("host=$servidor user=$usuario password=$senha dbname=$dbname")
        or die("Nao conectou!");
//
//if($con){
//    echo 'conectou!';
//}

