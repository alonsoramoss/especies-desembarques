<?php
if (isset($_POST)) {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    require("conexion.php");
    if (empty($_POST['ide'])){
        $query = $pdo->prepare("INSERT INTO especies (nombre, tipo) VALUES (:nom, :tip)");
        $query->bindParam(":nom", $nombre);
        $query->bindParam(":tip", $tipo);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else{
        $idE = $_POST['ide'];
        $query = $pdo->prepare("UPDATE especies SET nombre = :nom, tipo =:tip WHERE idEspecie = :idE");
        $query->bindParam(":nom", $nombre);
        $query->bindParam(":tip", $tipo);
        $query->bindParam("idE", $idE);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
    
}
