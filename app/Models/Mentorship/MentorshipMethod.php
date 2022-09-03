<?php

namespace App\Models\Mentorship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorshipMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'method_name', 'description'
    ];

    public function mentorships()
    {
        return $this->belongsToMany(Mentorship::class)->withPivot('method_name');
    }
}
