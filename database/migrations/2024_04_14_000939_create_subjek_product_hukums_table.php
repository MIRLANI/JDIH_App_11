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
        Schema::create('subjek_product_hukums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("subjek_hukum_id")->nullable(false);
            $table->unsignedBigInteger("product_hukum_id")->nullable(false);
            $table->foreign("subjek_hukum_id")->references("id")->on("subjek_hukums");
            $table->foreign("product_hukum_id")->references("id")->on("product_hukums");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjek_product_hukums');
    }
};
