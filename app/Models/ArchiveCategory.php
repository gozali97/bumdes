<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

   public function archives()
   {
      return $this->hasMany(Archives::class);
   }
}
