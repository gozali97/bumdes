<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProgram extends Model
{
    use HasFactory;

    protected $fillable =[
        'program_name', 'slug', 'description','image','button'
    ];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}