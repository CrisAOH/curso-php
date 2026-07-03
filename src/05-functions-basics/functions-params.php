<?php

declare(strict_types=1);

function calculateTotal(float $price, int $quantity): float
{
    return $price * $quantity;
}

// $total = calculateTotal(50, 3);

// Argumentos nombrados disponibles a partir de PHP 8.
$total = calculateTotal(quantity: 3, price: 150);
echo "El total a pagar: $total";
