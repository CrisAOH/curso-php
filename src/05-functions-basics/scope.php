<?php

declare(strict_types=1);

if (true) {
    $message = "Hola desde el if.\n";
}

echo $message; //Sí lo imprime

foreach ([1, 2, 3] as $number) {
    $lastNumber = $number;
}
echo "Imprime último número: $lastNumber\n"; //Sí lo imprime

//If y Foreach no crean un nuevo scope

///////////////////
$total = 100;
function showTotalWithGlobal()
{
    global $total; //Sin esta instrucción no se puede acceder a esa variable. No es una buena práctica usar esto.
    echo "Total usando una variable global: $total";
}
showTotalWithGlobal();

//El uso de parámetros es la manera adecuada
function showTotal(int $total): void
{
    echo "Total: $total";
}
showTotal($total);


//Scope en funciones anónimas
$tax = 0.13;
$calculateTax = function (float $amount) use ($tax): float {
    return $amount * $tax;
};

echo "Impuesto (closure): " . $calculateTax(100) . PHP_EOL;

$calculateTaxArrow = fn(float $amount): float => $amount * $tax;

echo "Impuesto (arrow): " . $calculateTaxArrow(100) . PHP_EOL;
