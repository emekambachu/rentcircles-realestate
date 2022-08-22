<?php

namespace App\Models\Properties;

use App\Models\Realtor\Realtor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'realtor_id',
        'name',
        'email',
        'message',
        'read',
    ];

    public function property(){
        return $this->belongsTo(PropertyDetail::class, 'property_id', 'id');
    }

    public function realtor(){
        return $this->belongsTo(Realtor::class, 'realtor_id', 'id');
    }
}
