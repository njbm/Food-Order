<?php
return [
    'publishable_key' => env('STRIPE_PUBLISHABLE_KEY'),
    'secret_key' => env('STRIPE_SECRET_KEY'),
    'signature_verify' => env('STRIPE_SIGNATURE_VERIFY'),
    'application_fee_amount' => 5
];