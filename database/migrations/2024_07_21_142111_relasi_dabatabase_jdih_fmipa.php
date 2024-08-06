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

        Schema::table('peraturans', function (Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->foreign('tahun_id')->references('id')->on('tahuns');
            $table->foreign('user_id')->on('users')->references('id');
            $table->foreign('password_id')->on('passwords')->references('id');

        });

        // relasi meny to one
        Schema::table('passwords', function (Blueprint $table) {
            $table->foreign('user_id')->on('users')->references('id');
        });

        // relasi one to one
        Schema::table('abstraks', function (Blueprint $table) {
            // $table->foreign("user_id")->on("users")->references("id");
            $table->foreign('peraturan_id')->on('peraturans')->references('id');

        });

        // relasi meny to meny
        Schema::table('tag_peraturans', function (Blueprint $table) {
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('peraturan_id')->references('id')->on('peraturans');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peraturans', function (Blueprint $table) {
            $table->dropForeign('kategori_id');
            $table->dropForeign('tahun_id');
            $table->dropForeign('user_id');
            $table->dropForeign('password_id');
            $table->dropForeign('password_id');
        });

        Schema::table('abstraks', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('peraturan_id');
        });

        Schema::table('tag_peraturans', function (Blueprint $table) {
            $table->dropForeign('tag_id');
            $table->dropForeign('peraturan_id');
        });

    }
};
