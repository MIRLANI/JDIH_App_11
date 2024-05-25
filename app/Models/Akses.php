<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Akses extends Model
{
      protected $table = "akses";
      protected $guarded = ["id"];


      public function product_hukum(): BelongsTo
      {
        return $this->BelongsTo(ProductHukum::class, "product_hukum_id", "id");
      }
}
