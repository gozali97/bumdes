<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_id',
        'event_date',
        'event_duration',
        'event_time',
        'location',
        'last_registration',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
