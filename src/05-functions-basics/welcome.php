<?php

declare(strict_types=1);

function showWelcomeMessage(): void
{
    echo "Bienvenido al sistema.\n";
}

function welcomeMessage(): string
{
    return "Bienvenido al sistema.\n";
}

showWelcomeMessage();
echo welcomeMessage();
