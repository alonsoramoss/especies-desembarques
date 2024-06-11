<?php
    $data = file_get_contents("php://input");
    require "conexion.php";
    $query = $pdo->prepare("DELETE FROM desembarques WHERE idDesembarque = :idD");
    $query->bindParam(":idD", $data);
    $query->execute();
    echo "ok";
?>