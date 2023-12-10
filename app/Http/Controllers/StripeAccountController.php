<?php

namespace App\Http\Controllers;

use Facades\App\Services\StripeService;
use App\Models\StripeAccount;
use Illuminate\Http\Request;

class StripeAccountController extends Controller
{
    public function kyc($accountId = null)
    {
        if (!isset($accountId)) {
            $account = StripeService::createAccount();

            if (!isset($account->id)) {
                $data = [
                    'text' => 'Unable to create account.',
                    'link' => 'https://mock.lol'
                ];
                return view('alert', $data);
            }

            StripeAccount::updateOrCreate([
                'account_id' => $account->id
            ], [
                'author_id' => auth()->id(),
                'business_profile' => $account->business_profile,
                'capabilities' => $account->capabilities,
                'charges_enabled' => $account->charges_enabled,
                'controller' => $account->controller,
                'country' => $account->country,
                'created' => $account->created,
                'default_currency' => $account->default_currency,
                'details_submitted' => $account->details_submitted,
                'email' => $account->email,
                'external_accounts' => $account->external_accounts,
                'future_requirements' => $account->future_requirements,
                'metadata' => $account->metadata,
                'payouts_enabled' => $account->payouts_enabled,
                'requirements' => $account->requirements,
                'settings' => $account->settings,
                'tos_acceptance' => $account->tos_acceptance,
                'type' => $account->type,
            ]);
        } else {
            $stripeAccount = StripeAccount::where('account_id', $accountId)->firstOrFail();

            if ($stripeAccount->charges_enabled) {
                $data = [
                    'text' => 'Your account has already been verified.',
                    'link' => 'https://mock.lol'
                ];
                return view('alert', $data);
            }
        }

        $accountLink = StripeService::createAccountLink($account->id ?? $accountId);

        if (!isset($accountLink->url)) {
            $data = [
                'text' => 'Unable to verify account.',
                'link' => 'https://mock.lol'
            ];
            return view('alert', $data);
        }

        return redirect()->away($accountLink->url);
    }

    public function verifyAccount($account_id)
    {
        $stripeAccount = StripeAccount::where(['account_id' => $account_id, 'charges_enabled' => 0])->firstOrFail();
        $account = StripeService::retrieveAccount($account_id);
        if ($account->charges_enabled) {
            $stripeAccount->update([
                'business_profile' => $account->business_profile,
                'capabilities' => $account->capabilities,
                'charges_enabled' => $account->charges_enabled,
                'controller' => $account->controller,
                'country' => $account->country,
                'created' => $account->created,
                'default_currency' => $account->default_currency,
                'details_submitted' => $account->details_submitted,
                'email' => $account->email,
                'external_accounts' => $account->external_accounts,
                'future_requirements' => $account->future_requirements,
                'metadata' => $account->metadata,
                'payouts_enabled' => $account->payouts_enabled,
                'requirements' => $account->requirements,
                'settings' => $account->settings,
                'tos_acceptance' => $account->tos_acceptance,
                'type' => $account->type,
            ]);
        }

        $data['accountId'] = $account->id;
        $data['chargesEnabled'] = $account->charges_enabled;
        return view('verification', $data);
    }
}
