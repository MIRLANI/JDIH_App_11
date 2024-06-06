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
            
            "nama" => ["required", 'unique:product_hukums,nama'],
            "deskripsi" => "required",

            "tipe_id" => "required",
            "judul" => "required",
            "tahun_id" => ["required", "numeric"],
            "category_hukum_id" => "required",
            "tempat_penetapan" => "required",
            "tanggal_penetapan" => "required",
            "tanggal_pengundangan" => "required",
            "tanggal_berlaku" => "required",
            "subjek" => ["required", "array", "min:1"],
            "sumber" => "required",
            "status" => "required",
            "bahasa" => "required",
            "lokasi" => "required",
            "teu" => "required",


            // "nomor" => "required",
            "file" => ["required",  "mimes:pdf"],

            
            
        ];
    }
}
