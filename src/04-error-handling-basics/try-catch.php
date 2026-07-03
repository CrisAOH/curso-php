<?php

declare(strict_types=1);

function getPriceWithTax(float $price): float
{
    if ($price < 0) {
        throw new Exception("El precio no puede ser negativo");
    }

    $taxRate = 0.10;
    $tax = $price * $taxRate;
    return $price * $tax;
}

try {
    $finalPrice = getPriceWithTax(-100);
    echo "Precio final con impuesto: $finalPrice\n";
} catch (Exception $th) {
    echo "Error: " . $th->getMessage();
}
