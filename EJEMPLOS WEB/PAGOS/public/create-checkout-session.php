<?php
  require_once 'vendor/autoload.php'; // Carga la biblioteca de Stripe
  $stripeSecretKey = 'sk_test_51P0aySRofynVwfKYrbUavAJPZlBJyOrxaCvveXl1q1wI8mhQerWuPTZYmBpdo2TO27C8QWjAVLMgJ7rnSkm9fwTt003TYTpJbP';
  \Stripe\Stripe::setApiKey($stripeSecretKey); // Reemplaza 'tu_clave_secreta_de_stripe' con tu clave secreta de Stripe

  header('Content-Type: application/json');

  $lookup_key = $_POST['lookup_key'];

  // Crea una sesión de pago en Stripe
  $session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
      'price' => $lookup_key,
      'quantity' => 1,
    ]],
    'mode' => 'subscription', // Modo de suscripción
    'success_url' => 'https://tu-sitio.com/success.html',
    'cancel_url' => 'https://tu-sitio.com/cancel.html',
  ]);

  echo json_encode(['sessionId' => $session->id]);
?>