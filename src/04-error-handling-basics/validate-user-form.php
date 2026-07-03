<?php

declare(strict_types=1);

function ValidateUserForm(array $data): array
{
    $requiredFields = ["name", "email", "password"];

    return array_filter($requiredFields, fn(string $field): bool => !isset($data[$field]) || trim((string)$data[$field]) === "");
}

$formData = [
    "name" => "Cristhian",
    "email" => "cris@mail.com",
    "password" => ""
];

$errors = ValidateUserForm($formData);
if (count($errors) > 0) {
    echo "Errores en el formulario: " . implode(", ", $errors) . "\n";
} else {
    echo "Formulario válido.";
}
