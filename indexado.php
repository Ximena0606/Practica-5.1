<?php

$colores = ["Rosa", "Rojo", "Azul", "Morado", "Negro."];

echo "Colores: ";
foreach ($colores as $key => $value) {
    echo $value;
}
echo "<br/>";
echo "Primer color: " . $colores[0] . "<br/>";
echo "Último color: " . $colores[count($colores) - 1] . "<br/>";
echo "Cantidad total de colores: " . count($colores) . "<br/>";
?>
