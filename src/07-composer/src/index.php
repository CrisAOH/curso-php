<?php
require_once '../vendor/autoload.php';

use App\Models\User;
use App\Services\UserService;

$quote = new \RandomQuotes\RandomQuotes();

print_r($quote->generate());

echo "\n";

$user = new User();
$user->name = "Cristhian";
$service = new UserService();
$service->register($user);

// Para habilitar el autoload: C:\wamp64\bin\php\php8.3.28\php.exe bin/composer dump-autoload 

// Cuando se hacen cambios en el composer.json, se ejecuta el comando C:\wamp64\bin\php\php8.3.28\php.exe bin/composer update