<?php
// Permite incluir un archivo, pero si este no existe no lanza error.
include "helpers.php";
echo "La aplicación continúa aunque el archivo no exista.\n";

// Permite incluir un archivo, pero si no existe sí lanza error.
require "helpers.php";
echo "La aplicación continúa aunque el archivo no exista.\n";

// Aseguran que el archivo sólo se cargue una vez, incluso si el código intenta incluirlo 2 veces
echo __DIR__ . "/helpers.php";
require_once __DIR__ . "helpers.php"; //DIR devuelve el directorio del archivo actual
$formattedDate = formatDate("2026-05-01");
echo $formattedDate;
