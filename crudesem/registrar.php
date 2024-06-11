<?php
if (isset($_POST)) {
    $idEspecie = $_POST['idEspecie'];
    $fecha = $_POST['fecha'];
    $kg_dia = $_POST['kg_dia'];
    require("conexion.php");
    if (empty($_POST['idd'])){
        $query = $pdo->prepare("INSERT INTO desembarques (idEspecie, fecha, kg_dia) VALUES (:idE, :fec, :kgD)");
        $query->bindParam(":idE", $idEspecie);
        $query->bindParam(":fec", $fecha);
        $query->bindParam(":kgD", $kg_dia);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else{
        $idD = $_POST['idd'];
        $query = $pdo->prepare("UPDATE desembarques SET idEspecie = :idE, fecha = :fec, kg_dia =:kgD WHERE idDesembarque = :idD");
        $query->bindParam(":idE", $idEspecie);
        $query->bindParam(":fec", $fecha);
        $query->bindParam(":kgD", $kg_dia);
        $query->bindParam("idD", $idD);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
}
