<?php
require_once __DIR__ . "/subtotal.php";
require_once __DIR__ . "/discount.php";
require_once __DIR__ . "/tax.php";

function processOrder(array $cart): array
{
    $subtotal = calculateSubtotal($cart);
    $withDiscount = applyDiscount($subtotal, 10);
    $total = calculateTotal($withDiscount, 13);

    return [
        'subtotal' => $subtotal,
        'discount' => $withDiscount,
        'total' => $total
    ];
}
