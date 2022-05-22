<?php

namespace App\Models\Properties;

use App\Models\Realtor\Realtor;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    protected $fillable = [
        'realtor_id',
        'property_type_id',
        'state_id',
        'title',
        'address',
        'description',
        'bedrooms',
        'bathrooms',
        'living_rooms',
        'square_feet',
        'cost',
        'features',
        'video',
        'map',
        'status'
    ];

    public function realtor(){
        return $this->belongsTo(Realtor::class, 'realtor_id', 'id');
    }

    public function state(){
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function property_type(){
        return $this->belongsTo(PropertyType::class, 'property_type_id', 'id');
    }

    public function property_photos(){
        return $this->hasMany(PropertyPhoto::class, 'property_detail_id', 'id');
    }

    public function property_reviews(){
        return $this->hasMany(PropertyReview::class, 'property_detail_id', 'id');
    }
}
