<?php
declare(strict_types=1);

$age = 18;
if ($age >= 18) {
    echo "El usuario es mayor de edad\n";
} else {
    echo "El usuario es menor de edad\n";
}

$status = ($age >= 18) ? "Mayor de edad" : "Menor de edad";
echo "El usuario es $status\n";

$score = 85;
if ($score >= 90) {
    echo "Calificación excelente";
} elseif ($score >= 70) {
    echo "Calificación aprobatoria";
} else {
    echo "Calificación reprobatoria";
}

$role = "editor";
switch ($role) {
    case 'admin':
        echo "Acceso completo al sistema\n";
        break;
    case 'editor':
        echo "Acceso de edición\n";
        break;
    case 'user':
        echo "Acceso limitado\n";
        break;
    default:
        echo "Rol no reconocido\n";
        break;
}

$return_value = match ($role) {
     'admin' => "Acceso completo al sistema",
     'editor' => "Acceso de edición\n",
     'user' => "Acceso limitado\n",
     default => "Rol no reconocido\n"
};
echo $return_value;
?>