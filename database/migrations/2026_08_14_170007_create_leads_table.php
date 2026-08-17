<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {

            $table->id();


            /*
            |--------------------------------------------------------------------------
            | Visitor Submission
            |--------------------------------------------------------------------------
            |
            | Information submitted directly through the website.
            |
            */

            $table->string('whatsapp');

            // What the visitor said they want
            $table->string('intent');

            // Optional message submitted by the visitor
            $table->text('message')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Client Information
            |--------------------------------------------------------------------------
            |
            | Filled manually after contacting the lead.
            |
            */

            $table->string('name')->nullable();

            $table->string('email')->nullable();

            $table->string('company')->nullable();

            $table->string('city')->nullable();

            $table->string('business_address')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Lead Qualification
            |--------------------------------------------------------------------------
            |
            | Information collected during the sales conversation.
            |
            */

            // Actual service the client is interested in
            $table->string('service')->nullable();

            // Budget the client says they can allocate
            $table->decimal('client_budget', 15, 2)->nullable();

            // monthly, one_time
            $table->string('budget_frequency')->nullable();

            // Internal notes from calls and conversations
            $table->text('notes')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Lead Management
            |--------------------------------------------------------------------------
            */

            // new, contacted, qualified, converted, lost
            $table->string('status')->default('new');

            // Next planned follow up date and time
            $table->timestamp('next_follow_up_at')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Marketing Attribution
            |--------------------------------------------------------------------------
            |
            | Captured from the visitor's first landing page.
            |
            */

            $table->string('utm_source')->nullable();

            $table->string('utm_medium')->nullable();

            $table->string('utm_campaign')->nullable();

            $table->string('utm_term')->nullable();

            $table->string('utm_content')->nullable();

            // First page visited
            $table->text('landing_page')->nullable();

            // Website/referrer that sent the visitor
            $table->text('landing_referrer')->nullable();

            // Meta click identifier
            $table->string('fbclid')->nullable();

            // Google Ads click identifier
            $table->string('gclid')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
