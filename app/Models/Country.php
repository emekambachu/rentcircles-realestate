<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'phone_code',
        'country_name',
        'country_code',
        'continent_code',
        'continent_name'
    ];
}
