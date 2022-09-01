<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'training_id', 'name', 'instance', 'description', 'avatar'
    ];
    
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
