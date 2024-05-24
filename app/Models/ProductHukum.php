<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductHukum extends Model
{

    use Sluggable, SoftDeletes;
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


    public function subjekHukums(): BelongsToMany
    {
        return $this->belongsToMany(SubjekHukum::class, "subjek_product_hukums",  "product_hukum_id", "subjek_hukum_id");
    }

    public function jumlahAkses(): HasMany
    {
        return $this->hasMany(JumlahAkses::class, "produk_hukum_id", "id");
    }

    public function abstrakHukum(): HasOne
    {
        return $this->hasOne(AbstrakHukum::class, "produk_hukum_id", "id");
    }

    public function subProducts()
    {
        return $this->hasMany(ProductHukum::class, 'product_hukum_id', "id");
    }

    public function parentId()
    {
        return $this->belongsTo(ProductHukum::class, 'product_hukum_id', "id");
    }
}
