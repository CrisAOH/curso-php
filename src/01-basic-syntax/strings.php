<?php
$name = "Cristhian";
$course = "PHP Moderno";

// CONCATENACIÓN
$message = "Bienvenido " . $name . " al curso de " . $course;

// INTERPOLACIÓN
$interpolatedMessage = "Bienvenido {$name} al curso de {$course}";

// EXPRESIONES DENTRO DE STRING
$calculatedMessage = "El resultado de la suma de 5 + 3 es: " . (5 + 3);
echo $calculatedMessage . PHP_EOL;

// ESCAPAR CARACTERES
echo "\"PHP Moderno\"";
?>