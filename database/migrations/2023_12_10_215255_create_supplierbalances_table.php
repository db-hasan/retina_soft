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
        Schema::create('supplierbalances', function (Blueprint $table) {
            $table->bigIncrements('sb_id');
            $table->string('sb_name',50)->nullable();
            $table->string('sb_type',50)->nullable();
            $table->string('sb_amount',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplierbalances');
    }
};
