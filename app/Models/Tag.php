<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use Sluggable, SoftDeletes;

    protected $table = 'tags';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    public $incrementing = true;

    public $timestamps = true;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama',
            ],
        ];
    }

    public function peraturans(): BelongsToMany
    {
        return $this->belongsToMany(Peraturan::class, 'tag_peraturans', 'tag_id', 'peraturan_id');
    }
}
