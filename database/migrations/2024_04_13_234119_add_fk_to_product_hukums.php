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
        Schema::table('status_hukums', function (Blueprint $table) {
            $table->foreign("product_hukum_id")->references("id")->on("product_hukums");
        });
        Schema::table('product_hukums', function (Blueprint $table) {
            $table->foreign("category_hukum_id")->references("id")->on("category_hukums");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_hukums', function (Blueprint $table) {
            $table->dropColumn("category_hukum_id");
            $table->dropColumn("product_hukum_id");
        });
    }
};
