<?php
    $data = file_get_contents("php://input");
    require "conexion.php";
    $query = $pdo->prepare("DELETE FROM especies WHERE idEspecie = :idE");
    $query->bindParam(":idE", $data);
    $query->execute();
    echo "ok";
?>