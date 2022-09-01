<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id','question','answer'
    ];

    public function categoryProgram()
    {
        return $this->belongsTo(CategoryProgram::class, 'program_id');
    }
}
