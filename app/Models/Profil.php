<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil';

    protected $fillable = [
        'user_id', 
        'tgl_lahir', 
        'jekel', 
        'nama_instansi',
        'jabatan',
        'province_id',
        'city_id',
        'no_telp'
    ];


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function provinsi()
    {
    	return $this->belongsTo(Province::class);
    }
}
