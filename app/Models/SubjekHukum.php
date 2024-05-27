<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjekHukum extends Model
{
    use Sluggable, SoftDeletes;
    protected $table = 'subjek_hukums';
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

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(ProductHukum::class, "subjek_product_hukums", "subjek_hukum_id", "product_hukum_id");
    }


}
