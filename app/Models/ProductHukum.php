<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductHukum extends Model
{
    
    use Sluggable;
    protected $table = 'product_hukums';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
    protected $guarded = ["id"];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function categoryHukum(): BelongsTo
    {
        return $this->belongsTo(CategoryHukum::class,  "category_hukum_id", "id");
    }

    public function abstractHukum(): HasOne
    {
        return $this->hasOne(AbstrakHukum::class, "produk_hukum_id", "id");
    }
}
