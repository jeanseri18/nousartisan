<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LDpkVFTJWWLd49TyzTxuv2qAzVo7OB7C9SozymRx4cM4y9zc4iBXRoRsZUJhr9f8yEJ3l9ripZAAA3Tl1M52LyJ00IkxCWoZ0');
$stripe = new \Stripe\StripeClient("sk_test_51LDpkVFTJWWLd49TyzTxuv2qAzVo7OB7C9SozymRx4cM4y9zc4iBXRoRsZUJhr9f8yEJ3l9ripZAAA3Tl1M52LyJ00IkxCWoZ0");
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242/public';
$mont=$_GET['montant'];

// $product = $stripe->products->create([
//   'name' => 'TEST',
//   'description' => 'TEST',
// ]);


// $price = $stripe->prices->create([
//   'unit_amount' => $mont *100,
//   'currency' => 'eur',
//   'product' => $product['id'],
// ]);


$checkout_session = \Stripe\Checkout\Session::create([
  'customer_email' => 'customer@example.com',
  'submit_type' => 'pay',
//   'billing_address_collection' => 'required',
  'shipping_address_collection' => [
    'allowed_countries' => ['FR'],
  ],

  'line_items' => [[
    'price_data' => [
      # The currency parameter determines which
      # payment methods are used in the Checkout Session.
      'currency' => 'eur',
      'product_data' => [
        'name' => 'Validation de service',
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
//   'line_items' => [[
//     # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
//     'price' => $price['id'],
//     'quantity' => 1,
//   ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',

]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
