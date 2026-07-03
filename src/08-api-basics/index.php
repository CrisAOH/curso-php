<?php

declare(strict_types=1);

$method = $_SERVER["REQUEST_METHOD"];
echo "MÉTODO HTTP RECIBIDO: $method\n";
http_response_code(200);
echo "Servidor activo.\n";
