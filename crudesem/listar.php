<?php
$data = file_get_contents("php://input");
require "conexion.php";
$consulta = $pdo->prepare("SELECT * FROM desembarques ORDER BY idDesembarque DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM desembarques WHERE idDesembarque LIKE '%".$data."%' OR idEspecie LIKE '%".$data."%' OR fecha LIKE '%".$data."%' OR kg_dia LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['idDesembarque'] . "</td>
            <td>" . $data['idEspecie'] . "</td>            
            <td>" . $data['fecha'] . "</td>
            <td>" . $data['kg_dia'] . "</td>
            <td class='text-center'>
                <button type='button' class='btn btn-warning' onclick=Editar('" . $data['idDesembarque'] . "')>Editar</button>
                <button type='button' class='btn btn-danger' onclick=Eliminar('" . $data['idDesembarque'] . "')>Eliminar</button>
            </td>        
        </tr>";
}
