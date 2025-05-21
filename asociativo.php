<?php

$usuario = ["Nombre" => "Dua Lipa", "Edad" => 21, "Email" => "Dua_Lipa22@email.com", "Carrera" => "Ingeniería Informática"];

echo "Nombre: " . $usuario["Nombre"] . "<br/>";
echo "Edad: " . $usuario["Edad"] . "<br/>";
echo "Email: " . $usuario["Email"] . "<br/>";
echo "Carrera: " . $usuario["Carrera"] . "<br/>";

$usuario["Edad"] = 22;

$usuario["Activo"] = true;

echo "Array completo:<br/>";
echo "<pre>";
print_r($usuario);
echo "</pre>";

?>
