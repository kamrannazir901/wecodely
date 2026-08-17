<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CaptureLeadAttribution
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {

        /*
        |--------------------------------------------------------------------------
        | Capture First Meaningful Attribution
        |--------------------------------------------------------------------------
        |
        | We only create attribution when the visitor actually has
        | attribution information.
        |
        */

        if (! $request->session()->has('lead_attribution')) {

            $queryParameters = $request->query();

            $hasAttribution = collect([
                'utm_source',
                'utm_medium',
                'utm_campaign',
                'utm_term',
                'utm_content',
                'fbclid',
                'gclid',
            ])->contains(
                fn($parameter) =>
                ! empty($queryParameters[$parameter])
            );


            if ($hasAttribution) {

                $request->session()->put(
                    'lead_attribution',
                    [

                        /*
                        | UTM Parameters
                        */

                        'utm_source' =>
                        $queryParameters['utm_source'] ?? null,

                        'utm_medium' =>
                        $queryParameters['utm_medium'] ?? null,

                        'utm_campaign' =>
                        $queryParameters['utm_campaign'] ?? null,

                        'utm_term' =>
                        $queryParameters['utm_term'] ?? null,

                        'utm_content' =>
                        $queryParameters['utm_content'] ?? null,


                        /*
                        | Advertising Click IDs
                        */

                        'fbclid' =>
                        $queryParameters['fbclid'] ?? null,

                        'gclid' =>
                        $queryParameters['gclid'] ?? null,


                        /*
                        | Landing Information
                        */

                        'landing_page' =>
                        $request->fullUrl(),

                        'landing_referrer' =>
                        $request->headers->get('referer'),
                    ]
                );
            }
        }


        return $next($request);
    }
}
