<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductHukumRequest extends FormRequest
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
            
            "nama" => "required",
            "deskripsi" => "required",

          
            "tipe_dokumen" => "required",
            "judul" => "required",
            "tahun" => ["required", "numeric"],
            "tempat_penetapan" => "required",
            "tanggal_penetapan" => "required",
            "tanggal_pengundangan" => "required",
            "tanggal_berlaku" => "required",
            "category_hukum_id" => "required",
            "subjek" => ["required", "array", "min:1"],
            "sumber" => "required",
            "status" => "required",
            "bahasa" => "required",
            "lokasi" => "required",
            "teu" => "required",
            "nomor" => "required",
            // "file" => ["required", "file"],

            
            "persetujuan" => "required"
            
        ];
    }
}
