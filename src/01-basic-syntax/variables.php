<?php
$name = "Cristhian";
$city = "Madrid";

echo "Nombre: $name" . PHP_EOL; # Con comillas simples, imprime el texto tal cual
echo 'Ciudad: $city';

$age = 25;
echo "Edad: $age" . PHP_EOL;

$height = 1.75;
echo "Altura: $height";

$isAvailable = true;
echo "¿Disponible? " . ($isAvailable ? "Sí" : "No") . PHP_EOL;

$empty = null;
echo "Valor nulo: $empty" . var_export($empty, true) . PHP_EOL;

$colors = array("Rojo", "Amarillo", "Verde");
$fruits = ["manzana", "platano", "pera"];
echo "Colores: " . implode(", ", $colors) . PHP_EOL;

// Array asociativo
$person = [
    'name' => "Cristhian",
    'age' => 23,
];
echo "Nombre: {$person['name']}" . PHP_EOL;

const API_URL = "https://api.example.com";
echo "URL: " . API_URL . PHP_EOL;

echo "Tipo de dato: " . gettype($person);
?>