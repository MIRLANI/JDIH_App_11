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



    public function abstrakHukum(): HasOne
    {
        return $this->hasOne(AbstrakHukum::class, "produk_hukum_id", "id");
    }


    public function akses(): HasOne
    {
        return $this->hasOne(Akses::class, "product_hukum_id", "id");
    }

    public static function mostPopularProducts()
    {
        return self::whereHas('akses', function ($query) {
            $query->where('review', '>', 0)->orWhere('download', '>', 0);
        })->with(['akses' => function ($query) {
            $query->orderByRaw('download DESC, review DESC');
        }])->get()->sortByDesc(function ($product) {
            return $product->akses->where('product_hukum_id', $product->id)->sum('download') + $product->akses->where('product_hukum_id', $product->id)->sum('review');
        });
    }
}
