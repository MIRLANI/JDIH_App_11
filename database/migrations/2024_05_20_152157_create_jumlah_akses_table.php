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
        Schema::create('jumlah_akses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("produk_hukum_id");
            $table->integer("total");
            $table->foreign("produk_hukum_id")->on("product_hukums")->references("id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_akses');
    }
};
