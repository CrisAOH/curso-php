<?php

declare(strict_types=1);

class Customer
{
    public function __construct(
        public string $name,
        public string $email
    ) {}
}

class Room
{
    public function __construct(
        public string $name,
        private float $pricePerNight
    ) {}

    public function price(): float
    {
        return $this->pricePerNight;
    }
}

interface PaymentMethod
{
    public function pay(float $amount): string;
}

class CardPayment implements PaymentMethod
{
    public function pay(float $amount): string
    {
        return "Pago con tarjeta aprobado";
    }
}

class QrPayment implements PaymentMethod
{
    public function pay(float $amount): string
    {
        return "Pago con QR aprobado";
    }
}

class BookingService
{
    public function reserve(Customer $customer, Room $room, int $nights, PaymentMethod $paymentMethod): void
    {
        $subtotal = $room->price() * $nights;
        $discount = 0; //TOFO: Implementar descuento por temporada

        $total = $subtotal - ($subtotal * $discount / 100);
        $paymentResult = $paymentMethod->pay($total);

        echo "Cliente: {$customer->name}\n";
        echo "Habitación: {$room->name}\n";
        echo "Noches: $nights\n";
        echo "Total a pagar: $total\n";
        echo $paymentResult . "\n";
    }
}

$customer = new Customer("Cristhian", "cris@mail.com");
$room = new Room("Habitación Doble", 120);
$service = new BookingService();
$nights = 3;
$payment = new CardPayment();
$service->reserve($customer, $room, $nights, $payment);
