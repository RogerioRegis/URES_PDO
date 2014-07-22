<?php

function puxar($tabela, $idfield, $con, $ident) {
    $id = $_GET['id'];
    $query = 'SELECT * FROM '.$tabela.' WHERE '.$idfield.' = :id';

    $stmt = $con->prepare($query);
    $stmt->bindValue(':id', $ident, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
}
