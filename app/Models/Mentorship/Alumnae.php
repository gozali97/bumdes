<?php

namespace App\Models\Mentorship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnae extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentorship_id',
        'alumnae_name',
        'institution',
        'description',
        'image'
    ];

    public function mentorship(){
        return $this->belongsTo(Mentorship::class, 'mentorship_id', 'id');
    }
}
