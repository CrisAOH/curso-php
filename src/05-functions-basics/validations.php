<?php

declare(strict_types=1);

function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function sanitizeUserId(string $userId): int
{
    $sanitized = filter_var($userId, FILTER_SANITIZE_NUMBER_INT);

    return (int)$sanitized;
}
