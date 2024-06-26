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
        Schema::create('abstrak_hukums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("produk_hukum_id")->nullable(false);
            $table->unsignedBigInteger("user_id");
            $table->string("title")->nullable();
            $table->text("materi_pokok")->nullable();
            $table->text("abstrak")->nullable();
            $table->text("catatan")->nullable();
            $table->string("slug")->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign("produk_hukum_id")->on("product_hukums")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abstrak_hukums');
    }
};
