<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryHukumRequest extends FormRequest
{
   
    public function rules(): array
    {
        return [
            "title" => ["required"],
            "short_title" => ["required"]
        ];
    }
}
