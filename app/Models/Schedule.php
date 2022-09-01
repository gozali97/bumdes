<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
   use HasFactory;

   public function getLocationAttribute($value)
   {
      return Str::remove(['<div>','</div>'], $value);
   }

   public function getEventDateAttribute($value)
   {
      return Carbon::parse($value)->isoFormat('D MMMM Y');
   }
}
