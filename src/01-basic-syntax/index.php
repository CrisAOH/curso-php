<?php
declare(strict_types=1); // Habilita el tipado estricto
// Comentario de una linea
# Comentario de una linea
/* 
Comentario de
varias líneas
*/
echo "Hola mundo!" . PHP_EOL; //PHP_EOL es un salto de línea,
echo "Esto estará en otra línea" . PHP_EOL; 

class User {
    public string $name;
}
$user = new User();
$user->name = "Cristhian";
println($user->name);

function println(string $message) {
    echo $message . PHP_EOL;
}
?>