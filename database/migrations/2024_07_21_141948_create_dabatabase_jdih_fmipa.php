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


        // table peraturan
        Schema::create('peraturans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("kategori_id")->nullable();
            $table->unsignedBigInteger("tahun_id")->nullable();
            $table->unsignedBigInteger("sumber_id")->nullable(); // ambil dari table sumber
            $table->unsignedBigInteger("user_id");
            $table->string("nama")->nullable();
            $table->text("deskripsi")->nullable();
            $table->string("tipe_dokumen")->nullable();
            $table->string("judul")->nullable();
            $table->string("tempat_penetapan")->nullable();
            $table->string("tanggal_penetapan")->nullable();
            $table->string("tanggal_pengundangan")->nullable();
            $table->string("tanggal_berlaku")->nullable();
            $table->string("jumlah_halaman")->nullable();
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



        // 
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string("nama")->nullable(false);
            $table->string("slug")->nullable(false);
            $table->softDeletes();
            $table->timestamps();
        });

        // 
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable(false)->unique();
            $table->string("short_title")->nullable(false)->unique();
            $table->string("slug")->nullable(false);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('tag_peraturans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tag_id")->nullable(false);
            $table->unsignedBigInteger("peraturan_id")->nullable(false);
            $table->timestamps();
        });

        Schema::create('abstraks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("peraturan_id")->nullable(false);
            $table->unsignedBigInteger("user_id");
            $table->string("title")->nullable();
            $table->text("materi_pokok")->nullable();
            $table->text("abstrak")->nullable();
            $table->text("catatan")->nullable();
            $table->string("slug")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('tahuns', function (Blueprint $table) {
            $table->id();
            $table->integer("tahun")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('sumbers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("nama");
            $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peraturans');
        Schema::dropIfExists('kategoris');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('kategoris');
        Schema::dropIfExists('tag_peraturans');
        Schema::dropIfExists('abstraks');
        Schema::dropIfExists('sumbers');
    }
};
