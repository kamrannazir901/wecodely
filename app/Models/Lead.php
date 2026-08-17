<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [

        // Visitor submission
        'whatsapp',
        'intent',
        'message',

        // Client information
        'name',
        'email',
        'company',
        'city',
        'business_address',

        // Qualification
        'service',
        'client_budget',
        'budget_frequency',
        'notes',

        // Lead management
        'status',
        'next_follow_up_at',

        // Marketing attribution
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term',
        'utm_content',
        'landing_page',
        'landing_referrer',
        'fbclid',
        'gclid',

    ];

    protected $casts = [
        'client_budget' => 'decimal:2',
        'next_follow_up_at' => 'datetime',
    ];
}
