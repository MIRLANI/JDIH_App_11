<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tahun extends Model
{
     use  SoftDeletes;
     protected $fillable = ["tahun"];
     public function product_hukums(): HasMany
     {
        return $this->hasMany(ProductHukum::class, "tahun_id", "id");
     }
}
