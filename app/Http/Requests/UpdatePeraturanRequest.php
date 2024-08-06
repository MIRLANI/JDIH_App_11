<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePeraturanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sumber_id' => 'required',
            // "kategori_id" => "required",
            'tahun_id' => ['required', 'numeric'],

            'nama' => ['required'],
            'deskripsi' => 'required',
            'judul' => 'required',
            // "tempat_penetapan" => "required",
            // "tanggal_penetapan" => "required",
            // "tanggal_pengundangan" => "required",
            // "tanggal_berlaku" => "required",
            'kategori_id' => 'required',
            'jumlah_halaman' => 'required',
            'status' => 'required',
            'bahasa' => 'required',
            'lokasi' => 'required',
            'teu' => 'required',
            'nomor' => 'required',
            // "file" => ["required", "file", "mimes:pdf"],
        ];
    }
}
