<?php
$listaUsuarios = array(
    array("nombre" => "Juan Pérez", "cedula" => "123456789", "edad" => 30),
    array("nombre" => "María Gómez", "cedula" => "987654321", "edad" => 28),
    array("nombre" => "Carlos López", "cedula" => "456789123", "edad" => 25),

);

function buscarUsuario($busqueda, $lista) {
    $resultados = array();

    foreach ($lista as $usuario) {
        if (strpos(strtolower($usuario['nombre']), strtolower($busqueda)) !== false ||
            $usuario['cedula'] === $busqueda) {
            $resultados[] = $usuario;
        }
    }

    return $resultados;
}

$busqueda = "Pérez"; 
$resultados = buscarUsuario($busqueda, $listaUsuarios);

if (count($resultados) > 0) {
    echo "Resultados de la búsqueda:<br>";
    foreach ($resultados as $usuario) {
        echo "Nombre: " . $usuario['nombre'] . "<br>";
        echo "Cédula: " . $usuario['cedula'] . "<br>";
        echo "Edad: " . $usuario['edad'] . "<br>";
        echo "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
?>