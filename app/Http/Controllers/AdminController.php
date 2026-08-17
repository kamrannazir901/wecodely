<?php

namespace App\Http\Controllers;

use App\Models\Lead;

class AdminController extends Controller
{
    /**
     * Admin dashboard.
     */
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Lead Statuses
        |--------------------------------------------------------------------------
        |
        | Load statuses from the central configuration file so the dashboard
        | automatically stays in sync with the CRM lead stages.
        |
        */

        $statuses = config('contacts.lead_statuses');


        /*
        |--------------------------------------------------------------------------
        | Basic Lead Statistics
        |--------------------------------------------------------------------------
        */

        $totalLeads = Lead::count();

        $todayLeads = Lead::whereDate(
            'created_at',
            today()
        )->count();


        /*
        |--------------------------------------------------------------------------
        | Follow Up Statistics
        |--------------------------------------------------------------------------
        */

        $followUpsToday = Lead::whereDate(
            'next_follow_up_at',
            today()
        )->count();

        $overdueFollowUps = Lead::where(
            'next_follow_up_at',
            '<',
            now()
        )
            ->whereNotNull('next_follow_up_at')
            ->count();

        $upcomingFollowUps = Lead::where(
            'next_follow_up_at',
            '>',
            now()
        )->count();


        /*
        |--------------------------------------------------------------------------
        | Lead Counts By Status
        |--------------------------------------------------------------------------
        |
        | This creates a count for every status defined in
        | config/contacts/lead_statuses.php.
        |
        */

        $statusCounts = Lead::query()
            ->selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');


        /*
        |--------------------------------------------------------------------------
        | Recent Leads
        |--------------------------------------------------------------------------
        */

        $recentLeads = Lead::query()
            ->latest()
            ->take(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Leads Requiring Attention
        |--------------------------------------------------------------------------
        |
        | These are leads whose follow up is due today or overdue.
        |
        */

        $followUpLeads = Lead::query()
            ->whereNotNull('next_follow_up_at')
            ->where('next_follow_up_at', '<=', now())
            ->orderBy('next_follow_up_at')
            ->take(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        return view('admin.dashboard', compact(
            'statuses',
            'statusCounts',
            'totalLeads',
            'todayLeads',
            'followUpsToday',
            'overdueFollowUps',
            'upcomingFollowUps',
            'recentLeads',
            'followUpLeads'
        ));
    }
}
