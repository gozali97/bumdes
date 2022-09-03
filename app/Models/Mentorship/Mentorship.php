<?php

namespace App\Models\Mentorship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Mentorship extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug',
        'participant',
        'description',
        'goal',
        'video_link',
        'featured',
        'image',
        'schedule',
    ];

    public function getDescriptionAttribute($value)
   {
      return Str::remove(['<div>','</div>'], $value);
   }

   public function documents()
   {
      return $this->belongsToMany(Document::class);
   }

   public function mentorshipMethods()
   {
      return $this->belongsToMany(MentorshipMethod::class);
   }

   public function teams()
   {
      return $this->belongsToMany(Team::class);
   }

   public function alumnae()
   {
      return $this->hasMany(Alumnae::class);
   }
}
