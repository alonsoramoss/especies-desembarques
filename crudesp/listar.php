<?php
$data = file_get_contents("php://input");
require "conexion.php";
$consulta = $pdo->prepare("SELECT * FROM especies ORDER BY idEspecie DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM especies WHERE idEspecie LIKE '%".$data."%' OR nombre LIKE '%".$data."%' OR tipo LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['idEspecie'] . "</td>
            <td>" . $data['nombre'] . "</td>
            <td>" . $data['tipo'] . "</td>
            <td class='text-center'>
                <button type='button' class='btn btn-warning' onclick=Editar('" . $data['idEspecie'] . "')>Editar</button>
                <button type='button' class='btn btn-danger' onclick=Eliminar('" . $data['idEspecie'] . "')>Eliminar</button>
            </td>        
        </tr>";
}
