<?php

namespace App\Services;

use Stripe\{Account, AccountLink, Stripe};

class StripeService
{
    public function __construct()
    {
        Stripe::setApiKey(config('stripe.secret_key'));
    }

    public function createAccount()
    {
        return Account::create(['type' => 'standard']);
    }

    public function retrieveAccount($accountId)
    {
        return Account::retrieve($accountId);
    }

    public function createAccountLink($stripeAccountId)
    {
        return AccountLink::create([
            'account' => $stripeAccountId,
            'refresh_url' => route('stripe.account.connect', $stripeAccountId),
            'return_url' => route('stripe.account.connect', $stripeAccountId),
            'type' => 'account_onboarding',
        ]);
    }
}
