<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Mail\NewLeadNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class LeadController extends Controller
{
    /**
     * Store a new lead from the public website.
     *
     * Visitor attribution is taken from the server-side session.
     * Admin and qualification fields are never accepted from the
     * public lead form.
     */
    public function store(Request $request): RedirectResponse
    {
        try {

            /*
        |--------------------------------------------------------------------------
        | Validate Public Lead Fields
        |--------------------------------------------------------------------------
        */

            $validated = $request->validate([

                'whatsapp' => [
                    'required',
                    'string',
                    'digits:11',
                    'regex:/^03[0-9]{9}$/',
                ],

                'intent' => [
                    'required',
                    'string',
                    'in:service,information',
                ],

                'message' => [
                    'nullable',
                    'string',
                    'max:2000',
                ],
            ]);


            /*
        |--------------------------------------------------------------------------
        | Get Visitor Attribution
        |--------------------------------------------------------------------------
        |
        | CaptureLeadAttribution middleware stores the original
        | visitor attribution in the session.
        |
        */

            $attribution = $request->session()->get(
                'lead_attribution',
                []
            );


            /*
        |--------------------------------------------------------------------------
        | Add Attribution To Lead
        |--------------------------------------------------------------------------
        |
        | These values come from the server-side session, not
        | from hidden form inputs.
        |
        */

            $validated['utm_source'] = $attribution['utm_source'] ?? null;
            $validated['utm_medium'] = $attribution['utm_medium'] ?? null;
            $validated['utm_campaign'] = $attribution['utm_campaign'] ?? null;
            $validated['utm_term'] = $attribution['utm_term'] ?? null;
            $validated['utm_content'] = $attribution['utm_content'] ?? null;

            $validated['fbclid'] = $attribution['fbclid'] ?? null;
            $validated['gclid'] = $attribution['gclid'] ?? null;

            $validated['landing_page'] = $attribution['landing_page'] ?? null;
            $validated['landing_referrer'] = $attribution['landing_referrer'] ?? null;


            /*
        |--------------------------------------------------------------------------
        | Default Lead Status
        |--------------------------------------------------------------------------
        */

            $validated['status'] = 'open';


            /*
        |--------------------------------------------------------------------------
        | Create Lead
        |--------------------------------------------------------------------------
        */

            $lead = Lead::create($validated);

            Mail::to('wecodelyteam@gmail.com')
                ->send(new NewLeadNotification($lead));


            /*
        |--------------------------------------------------------------------------
        | Clear Attribution
        |--------------------------------------------------------------------------
        |
        | The visitor has now converted.
        |
        | This prevents the same attribution from being attached
        | to another lead submitted later in the same session.
        |
        */

            $request->session()->forget('lead_attribution');


            return back()->with(
                'success',
                'Thank you. We have received your request and will contact you soon.'
            );
        } catch (ValidationException $e) {

            throw $e;
        } catch (Throwable $e) {

            Log::error('Lead submission failed.', [

                'error' => $e->getMessage(),

                'url' => $request->fullUrl(),

                'ip' => $request->ip(),
            ]);


            return back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }


    /**
     * Display leads in the admin dashboard.
     */
    public function index(Request $request): View
    {
        $query = Lead::query();

        /*
    |--------------------------------------------------------------------------
    | Lead Statuses
    |--------------------------------------------------------------------------
    |
    | Single source of truth for available lead stages.
    |
    */

        $statuses = config('contacts.lead_statuses', []);


        /*
    |--------------------------------------------------------------------------
    | Search
    |--------------------------------------------------------------------------
    |
    | Searches across the main contact fields.
    |
    */

        if ($request->filled('search')) {

            $search = trim(
                $request->string('search')->toString()
            );

            $query->where(function ($q) use ($search) {

                $q->where('whatsapp', 'like', "%{$search}%")
                    ->orWhere('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%");
            });
        }


        /*
    |--------------------------------------------------------------------------
    | Lead Stage
    |--------------------------------------------------------------------------
    */

        if ($request->filled('status')) {

            $status = $request->string('status')->toString();

            if (array_key_exists($status, $statuses)) {

                $query->where('status', $status);
            }
        }


        /*
    |--------------------------------------------------------------------------
    | Intent
    |--------------------------------------------------------------------------
    */

        if ($request->filled('intent')) {

            $intent = $request->string('intent')->toString();

            if (in_array($intent, ['service', 'information'], true)) {

                $query->where('intent', $intent);
            }
        }


        /*
    |--------------------------------------------------------------------------
    | Service
    |--------------------------------------------------------------------------
    |
    | Service is a text search, not a dropdown.
    |
    | Example:
    | "website" will match "Website Development"
    | "marketing" will match "Performance Marketing"
    |
    */

        if ($request->filled('service')) {

            $service = trim(
                $request->string('service')->toString()
            );

            $query->where(
                'service',
                'like',
                "%{$service}%"
            );
        }


        /*
    |--------------------------------------------------------------------------
    | UTM Source
    |--------------------------------------------------------------------------
    |
    | Exact match is appropriate here because this comes
    | from controlled attribution values.
    |
    */

        if ($request->filled('utm_source')) {

            $utmSource = trim(
                $request->string('utm_source')->toString()
            );

            $query->where(
                'utm_source',
                $utmSource
            );
        }


        /*
    |--------------------------------------------------------------------------
    | Date Filter
    |--------------------------------------------------------------------------
    */

        if ($request->filled('date')) {

            switch ($request->string('date')->toString()) {

                case 'today':

                    $query->whereDate(
                        'created_at',
                        today()
                    );

                    break;


                case 'yesterday':

                    $query->whereDate(
                        'created_at',
                        today()->subDay()
                    );

                    break;


                case '7':

                    $query->where(
                        'created_at',
                        '>=',
                        now()->subDays(7)
                    );

                    break;


                case '30':

                    $query->where(
                        'created_at',
                        '>=',
                        now()->subDays(30)
                    );

                    break;


                case '90':

                    $query->where(
                        'created_at',
                        '>=',
                        now()->subDays(90)
                    );

                    break;
            }
        }


        /*
    |--------------------------------------------------------------------------
    | Follow Up Filter
    |--------------------------------------------------------------------------
    */

        if ($request->filled('follow_up')) {

            switch ($request->string('follow_up')->toString()) {

                case 'today':

                    $query->whereDate(
                        'next_follow_up_at',
                        today()
                    );

                    break;


                case 'overdue':

                    $query->whereNotNull('next_follow_up_at')
                        ->where(
                            'next_follow_up_at',
                            '<',
                            now()
                        );

                    break;


                case 'upcoming':

                    $query->where(
                        'next_follow_up_at',
                        '>',
                        now()
                    );

                    break;
            }
        }


        /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | withQueryString() preserves all active filters when
    | navigating between pagination pages.
    |
    */

        $leads = $query
            ->latest('created_at')
            ->paginate(10)
            ->withQueryString();


        /*
    |--------------------------------------------------------------------------
    | Source Filter Options
    |--------------------------------------------------------------------------
    |
    | These are generated from actual attribution data.
    |
    */

        $sources = Lead::query()
            ->whereNotNull('utm_source')
            ->where('utm_source', '!=', '')
            ->distinct()
            ->orderBy('utm_source')
            ->pluck('utm_source');


        /*
    |--------------------------------------------------------------------------
    | Response
    |--------------------------------------------------------------------------
    */

        return view(
            'admin.leads.index',
            compact(
                'leads',
                'sources',
                'statuses'
            )
        );
    }


    /**
     * Display a single lead.
     */
    public function show(Lead $lead): View
    {
        $statuses = config('contacts.lead_statuses', []);

        return view(
            'admin.leads.show',
            compact(
                'lead',
                'statuses'
            )
        );
    }


    /**
     * Update manually collected lead/client information.
     *
     * This is used after contacting the lead.
     */
    public function update(
        Request $request,
        Lead $lead
    ): RedirectResponse {
        try {
            $statuses = config('contacts.lead_statuses', []);

            $validated = $request->validate([

                /*
                |--------------------------------------------------------------------------
                | Client Information
                |--------------------------------------------------------------------------
                */

                'name' => [
                    'nullable',
                    'string',
                    'max:255',
                ],

                'email' => [
                    'nullable',
                    'email',
                    'max:255',
                ],

                'company' => [
                    'nullable',
                    'string',
                    'max:255',
                ],

                'city' => [
                    'nullable',
                    'string',
                    'max:255',
                ],

                'business_address' => [
                    'nullable',
                    'string',
                    'max:1000',
                ],


                /*
                |--------------------------------------------------------------------------
                | Qualification
                |--------------------------------------------------------------------------
                */

                'service' => [
                    'nullable',
                    'string',
                    'max:255',
                ],

                'client_budget' => [
                    'nullable',
                    'numeric',
                    'min:0',
                ],

                'budget_frequency' => [
                    'nullable',
                    'string',
                    'in:one_time,monthly',
                ],

                'notes' => [
                    'nullable',
                    'string',
                    'max:10000',
                ],


                /*
                |--------------------------------------------------------------------------
                | Lead Management
                |--------------------------------------------------------------------------
                */

                'status' => [
                    'nullable',
                    'string',
                    'in:' . implode(',', array_keys($statuses)),
                ],

                'next_follow_up_at' => [
                    'nullable',
                    'date',
                ],
            ]);


            $lead->update($validated);


            return back()->with(
                'success',
                'Lead updated successfully.'
            );
        } catch (Throwable $e) {
            Log::error('Lead update failed.', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Unable to update the lead. Please try again.'
                );
        }
    }


    /**
     * Update only the lead status.
     */
    public function updateStatus(
        Request $request,
        Lead $lead
    ): RedirectResponse {
        $statuses = config('contacts.lead_statuses', []);

        $validated = $request->validate([
            'status' => [
                'required',
                'string',
                'in:' . implode(',', array_keys($statuses)),
            ],
        ]);


        $lead->update([
            'status' => $validated['status'],
        ]);


        return back()->with(
            'success',
            'Lead status updated successfully.'
        );
    }


    /**
     * Update the next follow up date.
     */
    public function updateFollowUp(
        Request $request,
        Lead $lead
    ): RedirectResponse {
        $validated = $request->validate([
            'next_follow_up_at' => [
                'nullable',
                'date',
            ],
        ]);


        $lead->update([
            'next_follow_up_at' => $validated['next_follow_up_at'],
        ]);


        return back()->with(
            'success',
            'Follow up date updated successfully.'
        );
    }


    /**
     * Delete a lead.
     */
    public function destroy(Lead $lead): RedirectResponse
    {
        try {
            $lead->delete();

            return redirect()
                ->route('admin.leads')
                ->with(
                    'success',
                    'Lead deleted successfully.'
                );
        } catch (Throwable $e) {
            Log::error('Lead deletion failed.', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);

            return back()->with(
                'error',
                'Unable to delete the lead. Please try again.'
            );
        }
    }
}
