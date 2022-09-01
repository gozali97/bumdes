<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisterTraining extends Model
{
   use HasFactory;
   protected $guarded = ['id'];

   public function getTanggalAttribute($value)
   {
      return Carbon::parse($value)->isoFormat('D MMMM Y');
   }
}
