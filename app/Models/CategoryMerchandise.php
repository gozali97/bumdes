<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMerchandise extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function merch()
    {
        return $this->hasMany(Merchandise::class, 'id', 'slug_id    ');
    }
}
