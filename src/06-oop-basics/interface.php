<?php
interface NotifierInterface
{
    public function send(string $message): void;
}

class EmailNotifier implements NotifierInterface
{
    public function send(string $message): void
    {
        echo "Enviando email con mensaje...\n";
    }
}

class SmsNotifier implements NotifierInterface
{
    public function send(string $message): void
    {
        echo "Enviando sms con mensaje...\n";
    }
}
