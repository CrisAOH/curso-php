<?php

class BaseUser
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    protected function logAccess(): void
    {
        echo "Acceso registrado para {$this->name}";
    }
}

class AdminUser extends BaseUser
{
    public function showRole(): void
    {
        echo "El usuario es administrador.\n";
    }

    public function dashboard(): void
    {
        $this->logAccess();
        echo "Accede al panel de administración.";
    }
}

$admin = new AdminUser("Cristhian");
$admin->dashboard();
$admin->showRole();
