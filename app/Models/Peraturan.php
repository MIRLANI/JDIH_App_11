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

class Peraturan extends Model
{

    use Sluggable, SoftDeletes;
    protected $table = 'peraturans';
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

    public function ketegori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class,  "kategori_id", "id");
    }


    public function tagPeraturans(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, "tag_peraturans",  "peraturan_id", "tag_id");
    }



    public function abstrak(): HasOne
    {
        return $this->hasOne(Abstrak::class, "peraturan_id", "id");
    }

    public function tahuns()
    {
        return $this->belongsTo(Tahun::class, "tahun_id", "id");
    }  

    public static function mostPopularProducts()
    {
        return self::query()
            ->where(function ($query) {
                $query->where('review', '>', 0)->orWhere('download', '>', 0);
            })
            ->orderByRaw('download DESC, review DESC')
            ->get()
            ->sortByDesc(function ($product) {
                return $product->download + $product->review;
            });
    }


    public function sumber(): BelongsTo
    {
        return $this->belongsTo(Sumber::class, "sumber_id", "id");
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
