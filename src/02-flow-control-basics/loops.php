<?php
declare(strict_types=1);
echo "Bucle for del 1 al 5";
for ($i=0; $i <= 5; $i++) { 
    echo "Número: $i\n";
}
echo "\n";
echo "Bucle while con intentos\n";
$attempt = 0;
while ($attempt < 3) {
    $attempt++;
    echo "Intento número: $attempt\n";
}
echo "\n";
echo "foreach recorriendo valores:\n";
$names = ["Cristhian", "Alberto", "Brandon"];
foreach ($names as $name) {
    echo "Hola, $name\n";
}
echo "foreach recorriendo indices y valores";
foreach ($names as $index => $name) {
    echo "Posición $index: $name\n";
}

/* 
Las palabras reservadas continue y break permiten controlar el flujo de los ciclos. Continue salta la iteración actual y break detiene el bucle por completo.
*/
?>