<?php

namespace App\Models\Properties;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    protected $fillable = [
        'property_id',
        'image'
    ];

    public function property(){
        $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
