<?php
$users = [
    [
        "id" => 1,
        "name" => "Ana García",
        "username" => "ana.garcia",
        "email" => "ana.garcia@example.com",
        "role" => "user",
        "status" => "active",
        "last_login" => "2026-01-20 09:15"
    ],
    [
        "id" => 2,
        "name" => "Luis Pérez",
        "username" => "luis.perez",
        "email" => "luis.perez@example.com",
        "role" => "admin",
        "status" => "active",
        "last_login" => "2026-01-21 08:40"
    ],
    [
        "id" => 3,
        "name" => "María López",
        "username" => "maria.lopez",
        "email" => "maria.lopez@example.com",
        "role" => "editor",
        "status" => "inactive",
        "last_login" => "2026-01-15 18:10"
    ]
];

// Contar
$totalUsers = count($users);
echo "Total de usuarios: $totalUsers\n";

// Transformar arreglo en otro arreglo. No transforma el arreglo original, crea uno nuevo.
$usernames = array_map(fn(array $user): string => $user["username"], $users);
foreach($usernames as $username) {
    echo "Username: $username\n";
}

// Filtrar datos de un arreglo
$adminUsers = array_filter($users, fn(array $user): bool => $user["role"] === "admin");
foreach($adminUsers as $adminUser) {
    echo "Usuario con el rol admin: {$adminUser["name"]}\n";
}

// Buscar un elemento en un arreglo
$allowedRoles = array_map(fn(array $user): string => $user["role"], $users);
$currentRole = "admin";
echo in_array($currentRole, $allowedRoles) ? "El rol $currentRole es válido\n" : "El rol $currentRole no es válido\n";

// Buscar llave en array
$maria = $users[2];
if (array_key_exists("email", $maria)) {
    echo "Existe la llave proporcionada";
} else {
    echo "No existe la llave proporcionada";
}

// Reducir un array a un único valor
$cart = [
    ["product" => "Laptop", "price" => 1200],
    ["product" => "Mouse", "price" => 20],
    ["product" => "Teclado", "price" => 80]
];
$total_cart = array_reduce($cart, function ($total, $product) {
    return $total + (float)$product["price"];
}, 0); // Ideal para agregación o cálculos acumulativos.
?>