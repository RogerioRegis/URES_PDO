<?php

try {
    $conn = new PDO("pgsql:host=localhost dbname=sicaes user=sicaes password=sicaes");
} catch (PDOException $exp) {
    print $exp->getMessage();
}