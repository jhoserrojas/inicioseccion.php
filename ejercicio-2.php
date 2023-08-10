<?php
$nombre = readline("Ingrese su nombre completo \n");
$id = intval(readline("Ingrese su identificación \n"));
$genero =readline("Ingrese su género \n");
$edad= intval(readline("Ingrese su edad \n"));
$peso= intval(readline("Ingrese su peso en ks\n"));
$estatura= floatval(readline("Ingrese su estatura en cm\n"));
$fumas =readline("¿Fumas algún tipo de drogas? \n");

$id2=intval(readline("Ingrese id de la persona que desea buscar\n"));
$resultado = match ($id2){
    $id=> "Su nombre es $nombre, identificado con el número $id, de género $genero, con $edad años de edad, con un peso de al rededor de $peso ks, con una estatura de $estatura cm y $fumas fumas sustancias psicoactivas",
   default => "Usuario no registrado"
};
 echo $resultado;
?>