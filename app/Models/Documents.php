<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documents extends Model
{
   use HasFactory;
   protected $guarded = ['id'];

   public function scopeFilter($query, array $filters)
   {
      // filter search
      $query->when($filters['search'] ?? false, fn ($query, $search) => $query->where('name', 'like', '%' . $search . '%'));

      // filter category
      $query->when($filters['category'] ?? false, fn ($query, $category) => $query->whereHas('categoryDocument', fn($query) => $query->where('slug', $category)));

      // filter sort
      $query->when($filters['sort'] ?? false, function ($query, $sort) {
         if ($sort == 1) {
            $query->latest();
         } elseif ($sort == 2) {
            $query->oldest();
         } elseif ($sort == 3) {
            $query->orderBy('name', 'ASC');
         } else {
            $query->orderBy('name', 'DESC');
         }
      });
   }

   public function getCreatedAtAttribute($value)
   {
      return Carbon::parse($value)->isoFormat('D MMMM Y');
   }

   public function getCategoryAttribute($value)
   {
      return ucfirst($value);
   }

   public function getNameAttribute($value)
   {
      return Str::title(Str::limit($value, 20, '...'));
   }

   public function categoryDocument()
   {
      return $this->belongsTo(CategoryDocument::class);
   }
}
