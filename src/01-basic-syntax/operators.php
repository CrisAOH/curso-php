<?php

declare(strict_types=1);

echo "🛒 Operadores en PHP\n\n";

$price = 120.50;
$qty = 3;
$stock = 2;
$coupon = "DEV10";

// 1) Comparación + Lógicos: ¿se puede comprar?
$canBuy = ($qty <= $stock) && ($qty > 0);

echo "Stock: $stock | Pedido: $qty\n";
echo "¿Se puede comprar? " . ($canBuy ? "Sí ✅" : "No ❌") . "\n";
?>