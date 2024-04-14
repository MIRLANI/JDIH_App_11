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
            $table->unsignedBigInteger("category_hukum_id")->nullable(false);
            $table->string("nama_peraturan")->nullable(false);
            $table->string("deskripsi")->nullable(false);
            $table->text("materi_pokok")->nullable();
            $table->string("judul")->nullable(false);
            $table->string("tipe_dokument")->nullable(false);
            $table->string("tahun")->nullable(false);
            $table->string("tempat_penetapan")->nullable(false);
            $table->string("tanggal_penetapan")->nullable(false);
            $table->string("tanggal_pengundangan")->nullable(false);
            $table->string("tanggal_berlaku")->nullable(false);
            $table->string("sumber")->nullable(false);
            $table->string("subjek")->nullable(false);
            $table->enum("status", ["berlaku", "tidak berlaku"])->nullable(false);
            $table->string("bahasa")->nullable(false);
            $table->string("lokasi")->nullable(false);
            $table->string("file")->nullable(false);
            $table->string("bidang")->nullable(false);
            $table->text("absrak")->nullable(false);
            $table->string("slug")->nullable(false);
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
