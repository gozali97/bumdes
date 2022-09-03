<?php

namespace App\Models\Mentorship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_name', 'slug'
    ];

    public function mentorships()
    {
        return $this->belongsToMany(Mentorship::class);
    }
}
