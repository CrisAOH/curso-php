<?php
declare(strict_types=1);

$products = ["Laptop", "Mouse", "Teclado"];

// Añadir elemento al final del array
array_push($products, "Monitor");

// Eliminar el último elemento del array
array_pop($products);

$user = [
    "name" => "Cristhian",
    "email" => "cristhian@example.com",
    "role" => "admin"
];

// Obtener propiedad de array asociativo
echo "Nombre: {$user["name"]}";

// Arreglos multidimensionales: Agrupación de arreglos asociativos
$users = [
    [
    "name" => "Cristhian",
    "email" => "cristhian@example.com",
    "role" => "admin"
    ], 
    [
        "name" => "Alberto",
        "email" => "alberto@example.com",
        "role" => "user"
    ]
];
foreach ($users as $user) {
    echo "Usuario: {$user["name"]}";
}
?>