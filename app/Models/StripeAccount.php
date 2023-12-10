<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StripeAccount extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    
    protected $casts = [
        'business_profile' => 'object',
        'capabilities' => 'object',
        'charges_enabled' => 'boolean',
        'controller' => 'object',
        'external_accounts' => 'object',
        'future_requirements' => 'object',
        'metadata' => 'array',
        'payouts_enabled' => 'boolean',
        'requirements' => 'object',
        'settings' => 'object',
        'tos_acceptance' => 'object'
    ];
}
