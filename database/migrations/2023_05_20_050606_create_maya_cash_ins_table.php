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
        Schema::create('maya_cash_ins', function (Blueprint $table) {
            $table->id();
            $table->integer('maya_transact_id');
            $table->integer('sa_transact_id');
            $table->string('remarks', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maya_cash_ins');
    }
};
