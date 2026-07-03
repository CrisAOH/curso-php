<?php
$formData = [
    "name" => "Cristhian",
    "email" => "cris@example.com",
    "password" => ""
];

$requiredFields = ["name", "email", "password"];
$missingFields = array_filter($requiredFields, fn(string $field) => !array_key_exists($field, $formData) || trim((string)$formData[$field]) === "");

if (count($missingFields) > 0) {
    echo "Faltan campos requeridos." . implode(", ", $missingFields) . "\n";
} else {
    echo "Formulario completo y listo para procesar.\n";
}

$catalog = [
    ["sku" => "LP-001", "name" => "Laptop", "price" => 1200, "stock" => 3],
    ["sku" => "MS-002", "name" => "Mouse", "price" => 25, "stock" => 0],
    ["sku" => "KB-003", "name" => "Teclado", "price" => 80, "stock" => 12],
];

$usersTask = [
    ["id" => 1, "name" => "Ana", "email" => "ana@email.com", "role" => "user"],
    ["id" => 2, "name" => "Luis", "email" => "luis@email.com", "role" => "admin"],
    ["id" => 3, "name" => "María", "email" => "maria@email.com", "role" => "editor"],
];

/*
=============
🏆 Tarea para funciones en arreglos para transformar y filtrar
=============
*/
// 1. Usar array_map para transformar una lista de usuarios.
//    → Cada elemento debe ser un array con las claves "id" y "label".
//    → "label" debe combinar el nombre y el rol con formato: "Nombre (rol)".
$listUsers = array_map(fn(array $user) => [
    "id" => $user["id"],
    "label" => "{$user["name"]} ({$user["role"]})"
], $usersTask);

// 2. Mostrar la lista formateada por pantalla.
//    → Recorrer el array resultante e imprimir cada "label" precedido por un guion (-).
//    → Ejemplo de salida esperada:
//        - Ana (admin)
//        - Luis (user)
//        - María (editor)
foreach ($listUsers as $user) {
    echo "- {$user["label"]}\n";
}

// 3. Usar array_filter para filtrar productos disponibles.
//    → Incluir solo aquellos productos cuyo "stock" sea mayor a cero.
$availableProducts = array_filter($catalog, fn(array $product) => $product["stock"] > 0);

// 4. Mostrar los productos disponibles.
//    → Por cada producto disponible, imprimir su nombre y precio en el formato: "Nombre | Precio: valor".
foreach ($availableProducts as $product) {
    echo "{$product["name"]} | {$product["price"]}\n";
}

// Ordenar
usort($availableProducts, fn(array $a, array $b) => $a["price"] <=> $b["price"]);
foreach ($availableProducts as $product) {
    echo "-> {$product["name"]} | Precio: {$product["price"]}\n";
}

// Busqueda
$skuList = array_column($catalog, "sku");
$requestedSku = "KB-003";
echo in_array($requestedSku, $skuList, true) ? "El producto con SKU: $requestedSku existe en el catalogo" : "El producto con SKU: $requestedSku existe en el catalogo";
?>