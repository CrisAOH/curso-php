<?php
declare(strict_types=1);

$formData = [
    "name" => "Cristhian"
];
if (isset($formData["email"])) {
    echo "Email recibido {$formData["email"]}\n";
} else {
    echo "Error: El campo email es obligatorio\n";
}

function calculateTotal(float $price, int $quantity): float {
    return $price * $quantity;
}
$total = calculateTotal(100.3, 2);
echo "Total a pagar es: $total\n";

function divide(int $a, int $b): float {
    if ($b === 0) {
        echo "Error: División por cero no permitida.\n";
        return 0;
    }
    return $a / $b;
}

$result = divide(10, 0);
echo "El resultado de la división es: $result\n";

$fruits = ["manzana", "banana", "naranja"];
if (isset($fruits[3])) {
    echo "$fruits[3]\n";
} else {
    echo "Error: Índice 3 no existe en el array.";
}

function greet(string $name): string {
    if (func_num_args() > 1) {
        return "No deberías mandar más de 1 argumento.";
    }
    return "Hola, $name!\n";
}
echo greet("Devi", "Test");
?>