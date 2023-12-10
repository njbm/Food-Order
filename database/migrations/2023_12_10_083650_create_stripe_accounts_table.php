<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('stripe_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'author_id');
            $table->string('account_id')->nullable();
            $table->text('business_profile')->nullable();
            $table->text('capabilities')->nullable();
            $table->boolean('charges_enabled')->default(false);
            $table->text('controller')->nullable();
            $table->string('country')->nullable();
            $table->string('created')->nullable();
            $table->string('default_currency')->nullable();
            $table->boolean('details_submitted')->default(false);
            $table->text('email')->nullable();
            $table->text('external_accounts')->nullable();
            $table->text('future_requirements')->nullable();
            $table->text('metadata')->nullable();
            $table->boolean('payouts_enabled')->default(false);
            $table->text('requirements')->nullable();
            $table->text('settings')->nullable();
            $table->text('tos_acceptance')->nullable();
            $table->string('type')->default('standard');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stripe_accounts');
    }
};
