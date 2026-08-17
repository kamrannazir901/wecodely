<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lead>
 */
class LeadFactory extends Factory
{
    protected $model = Lead::class;

    public function definition(): array
    {
        $intent = fake()->randomElement([
            'service',
            'information',
        ]);

        $service = fake()->randomElement([
            'Performance Marketing',
            'Website Development',
            'Both',
        ]);

        $status = fake()->randomElement([
            'open',
            'contacted',
            'meeting_set',
            'disqualified',
            'qualified',
            'unqualified',
            'customer',
            'opportunity_lost',
        ]);

        return [

            /*
            |--------------------------------------------------------------------------
            | Visitor Submission
            |--------------------------------------------------------------------------
            */

            'whatsapp' => '03' . fake()->numerify('#########'),

            'intent' => $intent,

            'message' => fake()->optional(0.85)->sentence(12),


            /*
            |--------------------------------------------------------------------------
            | Client Information
            |--------------------------------------------------------------------------
            */

            'name' => fake()->optional(0.8)->name(),

            'email' => fake()->optional(0.75)->safeEmail(),

            'company' => fake()->optional(0.75)->company(),

            'city' => fake()->optional(0.8)->randomElement([
                'Lahore',
                'Karachi',
                'Islamabad',
                'Rawalpindi',
                'Faisalabad',
                'Multan',
                'Gujranwala',
                'Peshawar',
            ]),

            'business_address' => fake()->optional(0.6)->address(),


            /*
            |--------------------------------------------------------------------------
            | Lead Qualification
            |--------------------------------------------------------------------------
            */

            'service' => $intent === 'service'
                ? $service
                : fake()->optional(0.3)->randomElement([
                    'Performance Marketing',
                    'Website Development',
                    'Both',
                ]),

            'client_budget' => $intent === 'service'
                ? fake()->randomElement([
                    25000,
                    40000,
                    50000,
                    75000,
                    100000,
                    150000,
                    200000,
                ])
                : null,

            'budget_frequency' => $intent === 'service'
                ? fake()->randomElement([
                    'one_time',
                    'monthly',
                ])
                : null,

            'notes' => fake()->optional(0.7)->paragraph(2),


            /*
            |--------------------------------------------------------------------------
            | Lead Management
            |--------------------------------------------------------------------------
            */

            'status' => $status,

            'next_follow_up_at' => in_array($status, [
                'open',
                'contacted',
                'meeting_set',
                'qualified',
            ])
                ? fake()->dateTimeBetween('now', '+14 days')
                : null,


            /*
            |--------------------------------------------------------------------------
            | Marketing Attribution
            |--------------------------------------------------------------------------
            */

            'utm_source' => fake()->randomElement([
                'facebook',
                'instagram',
                'google',
                'direct',
                'referral',
            ]),

            'utm_medium' => fake()->randomElement([
                'paid_social',
                'cpc',
                'organic',
                'referral',
                'none',
            ]),

            'utm_campaign' => fake()->optional(0.7)->randomElement([
                'lead_generation',
                'website_leads',
                'performance_marketing',
                'business_website',
            ]),

            'utm_term' => fake()->optional(0.4)->words(3, true),

            'utm_content' => fake()->optional(0.5)->randomElement([
                'video_ad',
                'carousel_ad',
                'static_ad',
                'landing_page',
            ]),

            'landing_page' => fake()->randomElement([
                'https://wecodely.com/',
                'https://wecodely.com/performance-marketing',
                'https://wecodely.com/website-development',
            ]),

            'landing_referrer' => fake()->randomElement([
                'https://www.facebook.com/',
                'https://www.instagram.com/',
                'https://www.google.com/',
                null,
            ]),

            'fbclid' => fake()->optional(0.45)->regexify('[A-Za-z0-9_-]{30}'),

            'gclid' => fake()->optional(0.25)->regexify('[A-Za-z0-9_-]{30}'),
        ];
    }
}
