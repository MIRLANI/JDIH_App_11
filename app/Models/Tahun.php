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

     
     public function peraturans(): HasMany
     {
        return $this->hasMany(Peraturan::class, "tahun_id", "id");
     }
}
