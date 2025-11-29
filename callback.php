<?php
require 'vendor/autoload.php';
use Yabacon\Paystack;

// Load keys from .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$secretKey = $_ENV['PAYSTACK_SECRET_KEY'];
$paystack = new Paystack($secretKey);

$reference = $_GET['reference'] ?? '';

if (!$reference) {
    die("No reference supplied");
}

try {
    $tranx = $paystack->transaction->verify([
        'reference' => $reference
    ]);

    if ($tranx->data->status === 'success') {
        echo "<h2>Payment Successful</h2>";
        echo "Reference: " . $reference;
    } else {
        echo "<h2>Payment Failed</h2>";
    }
} catch (\Yabacon\Paystack\Exception\ApiException $e) {
    echo "Error: " . $e->getMessage();
}
