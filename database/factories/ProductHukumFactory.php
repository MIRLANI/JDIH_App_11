<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peraturan>
 */
class ProductHukumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'kategori_id' => $this->faker->numberBetween(1, 10),
            // 'nama' => $this->faker->sentence,
            // 'deskripsi' => $this->faker->paragraph,
            // 'tipe_dokumen' => $this->faker->randomElement(['Peraturan Perundang-undangan', 'Peraturan Pemerintah', 'Keputusan Presiden']),
            // 'judul' => $this->faker->sentence,
            // 'tahun' => $this->faker->year,
            // 'tempat_penetapan' => $this->faker->city,
            // 'tanggal_penetapan' => $this->faker->date,
            // 'tanggal_pengundangan' => $this->faker->date,
            // 'tanggal_berlaku' => $this->faker->date,
            // 'jumlah_halaman' => $this->faker->sentence,
            // 'status' => $this->faker->randomElement(['Berlaku', 'Tidak Berlaku']),
            // 'bahasa' => $this->faker->randomElement(['Bahasa Indonesia', 'English']),
            // 'lokasi' => $this->faker->city,
            // 'file' => $this->faker->fileExtension,
            // 'mencabut' => $this->faker->numberBetween(0, 1),
            // 'teu' => $this->faker->randomElement(['TEU 1', 'TEU 2', 'TEU 3']),
        ];
    }
}
