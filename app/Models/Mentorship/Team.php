<?php

namespace App\Models\Mentorship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'institution','image','description'
    ];

    public function mentorships()
    {
        return $this->belongsToMany(Mentorship::class)->withPivot('name');
    }


}
