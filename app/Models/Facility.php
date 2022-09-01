<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facility extends Model
{
    use HasFactory;


    protected $fillable = [
        'facility_name', 'slug'
    ];


    public function trainings()
    {
        return $this->belongsToMany(Training::class)->withPivot('facility_name');
    }
}
