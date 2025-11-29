<?php
require 'vendor/autoload.php';
use Yabacon\Paystack;

// Load keys from .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$secretKey = $_ENV['PAYSTACK_SECRET_KEY'];
$paystack = new Paystack($secretKey);

// Get form values
$email = $_POST['email'] ?? '';
$amount = $_POST['amount'] ?? 0;

if(!$email || $amount <= 0){
    die('Invalid email or amount');
}

// Convert amount to kobo (Paystack uses smallest currency unit)
$amountKobo = $amount * 100;

try {
    $tranx = $paystack->transaction->initialize([
        'email' => $email,
        'amount' => $amountKobo,
        'callback_url' => 'http://localhost/payment-system/callback.php'
    ]);

    header('Location: ' . $tranx->data->authorization_url);
    exit();
} catch (\Yabacon\Paystack\Exception\ApiException $e) {
    echo "Error: " . $e->getMessage();
}
