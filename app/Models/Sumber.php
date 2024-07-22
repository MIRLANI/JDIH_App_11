<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use PHPUnit\Event\Runtime\Runtime;

class Sumber extends Model
{
  
    // use  SoftDeletes;
    protected $fillable = ["nama", "user_id"];
    protected $table = 'sumbers';


    public function peraturans(): HasMany
    {
        return $this->hasMany(Peraturan::class, "sumber_id", "id");
    }

    public function user()
    {
        return $this->belongsTo( User::class, "user_id", "id");
    }
}
