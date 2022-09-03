<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\MergeValue;

class MerchandiseDetails extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class);
    }
}
