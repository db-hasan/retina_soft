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
        Schema::create('customerbalances', function (Blueprint $table) {
            $table->bigIncrements('cb_id');
            $table->string('cb_name',50)->nullable();
            $table->string('cb_type',50)->nullable();
            $table->string('cb_amount',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customerbalances');
    }
};
