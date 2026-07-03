<?php

declare(strict_types=1);

$users = [
    ["name" => "Teddy", "role" => "admin", "age" => 28],
    ["name" => "Edgar", "role" => "user", "age" => 16],
    ["name" => "Devi", "role" => "editor", "age" => 22],
    ["name" => "Maria", "role" => "user", "age" => 35],
];

//Función anónima: Básicamente una función sin nombre
$formatPrice = function (float $price): string {
    return "Precio: " . number_format($price, 2) . "\n";
};

echo $formatPrice(2500);

$adultUsers = array_filter(
    $users,
    fn(array $user) => $user['age'] > 18
);
foreach ($adultUsers as $user) {
    echo "- Nombre: " . $user["name"] . "\n";
}

$allowedUser = "editor";

//Para usar variables externas, se debe usar una arrow function
$adultUsersWithRole = array_filter(
    $users,
    fn(array $user) => $user['role'] === $allowedUser
);

//Si no se usa arrow function, la variable externa se usa de otra manera.
$adultUsersWithRole = array_filter(
    $users,
    function (array $user) use ($allowedUser) {
        $user['role'] === $allowedUser;
    }
);

foreach ($adultUsersWithRole as $userRole) {
    echo "- Nombre: " . $userRole["name"] . "\n";
}
