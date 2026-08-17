<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\AdminController;


/*
Route::get('/test/clear-attribution', function (Illuminate\Http\Request $request) {
    $request->session()->forget('lead_attribution');

    return response()->json([
        'cleared' => true,
        'session_id' => $request->session()->getId(),
    ]);
});

Route::get('/test-attribution', function (Illuminate\Http\Request $request) {
    return response()->json([
        'session' => $request->session()->get('lead_attribution'),
        'session_id' => $request->session()->getId(),
    ]);
});
*/

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

Route::view('/', 'pages.home')
    ->name('home');

Route::view('/web-development', 'pages.web-development')
    ->name('web-development');

Route::view('/performance-marketing', 'pages.performance-marketing')
    ->name('performance-marketing');

Route::view('/about', 'pages.about')
    ->name('about');

Route::view('/contact', 'pages.contact')
    ->name('contact');


/*
|--------------------------------------------------------------------------
| Legal Pages
|--------------------------------------------------------------------------
*/

Route::view('/privacy-policy', 'pages.privacy-policy')
    ->name('privacy-policy');

Route::view('/terms-and-conditions', 'pages.terms-and-conditions')
    ->name('terms-and-conditions');


/*
|--------------------------------------------------------------------------
| Lead Submission
|--------------------------------------------------------------------------
*/

Route::post('/leads', [LeadController::class, 'store'])
    ->name('leads.store');


/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->middleware('noindex')
    ->name('login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('login.store');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'noindex'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/', [AdminController::class, 'index'])
            ->name('admin.dashboard');

        Route::get('/leads', [LeadController::class, 'index'])
            ->name('admin.leads');

        Route::get('/leads/{lead}', [LeadController::class, 'show'])
            ->name('admin.leads.show');

        Route::patch('/leads/{lead}/status', [LeadController::class, 'updateStatus'])
            ->name('admin.leads.status');

        Route::patch('/leads/{lead}', [LeadController::class, 'update'])
            ->name('admin.leads.update');

        Route::delete('/leads/{lead}', [LeadController::class, 'destroy'])
            ->name('admin.leads.destroy');
    });
