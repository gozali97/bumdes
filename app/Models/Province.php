<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use AzisHapidin\IndoRegion\Traits\ProvinceTrait;

/**
 * Province Model.
 */
class Province extends Model
{
    use ProvinceTrait;
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'provinces';

    /**
     * Province has many regencies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }
    public function pro()
    {
        return $this->hasMany(Profil::class);
    }

    public function getNameAttribute($value)
    {
      return Str::title($value);
    }
}
