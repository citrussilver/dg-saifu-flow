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
        Schema::create('maya_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('maya_id');
            $table->dateTime('date_time');
            $table->tinyInteger('transact_type_id');
            $table->decimal('current_maya_balance', 19, 2);
            $table->decimal('amount', 19, 2);
            $table->decimal('post_maya_balance', 19, 2);
            $table->string('remarks', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maya_transactions');
    }
};
