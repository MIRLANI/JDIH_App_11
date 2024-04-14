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
        Schema::create('status_hukums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("product_hukum_id")->nullable(false);
            $table->string("mengubah")->nullable(false);
            $table->string("diubah")->nullable(false);
            $table->string("mencabut")->nullable(false);
            $table->string("dicabut")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_hukums');
    }
};
