<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Training extends Model
{
   use HasFactory;

   protected $fillable = [
      'title',
      'slug',
      'participant',
      'description',
      'price',
      'purposes',
      'video_link',
   ];

   public function getPriceAttribute($value)
   {
      return number_format($value,0,",",".");
   }

   public function getDescriptionAttribute($value)
   {
      return Str::remove(['<div>','</div>'], $value);
   }

   public function facilities()
   {
      return $this->belongsToMany(Facility::class);
   }

   public function schedule()
   {
      return $this->hasOne(Schedule::class, 'training_id', 'id');
   }

   public function materials()
   {
      return $this->belongsToMany((Material::class));
   }

   public function testimonial()
    {
        return $this->hasMany(Testimonial::class, 'training_id', 'id');
    }

   public function trainers()
   {
      return $this->belongsToMany(Trainer::class);
   }
}
