<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description'
    ];


    public function trainings()
    {
        // return $this->belongsToMany(Training::class)->withPivot('title');
        return $this->belongsToMany(Training::class);
    }
}


