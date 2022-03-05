<?php

namespace App\Models\Realtor;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Realtor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'realtor';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'country',
        'state',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
