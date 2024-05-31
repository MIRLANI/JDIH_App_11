<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipeHukum extends Model
{
    protected $guarded = ["id"];

    public function product_hukums(): HasMany
    {
        return $this->hasMany(ProductHukum::class, "tipe_id", "id");
    }
}
