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
        Schema::create('maya_q_r_pays', function (Blueprint $table) {
            $table->id();
            $table->integer('maya_transact_id');
            $table->dateTime('date_time');
            $table->string('store_name', 300);
            $table->decimal('amount', 19, 2);
            $table->string('description', 400);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maya_q_r_pays');
    }
};
