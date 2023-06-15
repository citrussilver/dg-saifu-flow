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
        Schema::create('maya_accounts', function (Blueprint $table) {
            $table->id();
            $table->char('mobile_number', 11);
            $table->char('account_nick', 10);
            $table->char('last_4_digits', 4);
            $table->decimal('balance', 19, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maya_accounts');
    }
};
