<?php

namespace App\Models\Properties;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    protected $fillable = [
        'property_detail_id',
        'image'
    ];

    public function property_detail(){
        $this->belongsTo(PropertyDetail::class, 'property_detail_id', 'id');
    }
}
