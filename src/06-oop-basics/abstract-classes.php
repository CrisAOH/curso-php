<?php
abstract class PaymentProcessor
{
    protected float $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    abstract public function process(): void;

    public function log(): void
    {
        echo "Procesando pago por: {$this->amount}";
    }
}

class CreditCardPayment extends PaymentProcessor
{
    public function process(): void
    {
        $this->log();
        echo "Pago procesado con tarjeta de crédito.";
    }
}

class PayPalPayment extends PaymentProcessor
{
    public function process(): void
    {
        $this->log();
        echo "Pago procesado con PayPal.";
    }
}

$payment = new CreditCardPayment(150);
$payment->process();
