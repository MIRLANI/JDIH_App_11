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
        Schema::table('product_hukums', function (Blueprint $table) {
            $table->foreign("tipe_id")->on("tipe_hukums")->references("id");
        });

        Schema::table('product_hukums', function (Blueprint $table) {
            $table->foreign("user_id")->on("users")->references("id");
        });

        Schema::table('abstrak_hukums', function (Blueprint $table) {
            $table->foreign("user_id")->on("users")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_hukums', function (Blueprint $table) {
            //
        });
    }
};
