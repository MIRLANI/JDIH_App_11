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
        Schema::create('product_hukums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("category_hukum_id")->nullable();
            $table->unsignedBigInteger("tahun_id")->nullable();
            $table->unsignedBigInteger("tipe_id")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->string("nama")->nullable();
            $table->string("deskripsi")->nullable();
            $table->string("tipe_dokumen")->nullable();
            $table->string("judul")->nullable();
            $table->string("tempat_penetapan")->nullable();
            $table->string("tanggal_penetapan")->nullable();
            $table->string("tanggal_pengundangan")->nullable();
            $table->string("tanggal_berlaku")->nullable();
            $table->string("sumber")->nullable();
            $table->enum("status", ["berlaku", "tidak berlaku"])->nullable();
            $table->string("bahasa")->nullable();
            $table->string("lokasi")->nullable();
            $table->string("teu")->nullable();
            $table->string("nomor")->nullable();
            $table->string("bidang")->nullable();
            $table->text("status_hukum")->nullable();
            $table->string("slug")->nullable();
            $table->string("file")->nullable();
            $table->integer("review")->nullable();
            $table->integer("download")->nullable();
            $table->enum("status_public", ["public", "non-public"])->default("public")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_hukums');
    }
};
