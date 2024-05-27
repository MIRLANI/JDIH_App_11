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
        // Schema::create('akses', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('product_hukum_id');
        //     $table->string("file")->default("");
        //     $table->integer('review')->default(0);
        //     $table->integer('download')->default(0);
        //     $table->foreign("product_hukum_id")->on("product_hukums")->references("id");
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akses');
    }
};
