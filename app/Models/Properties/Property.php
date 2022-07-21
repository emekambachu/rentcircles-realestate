<?php

namespace App\Models\Properties;

use App\Models\Realtor\Realtor;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'realtor_id',
        'owner',
        'property_type_id',
        'service',
        'state_id',
        'title',
        'address',
        'description',
        'bedrooms',
        'bathrooms',
        'living_rooms',
        'square_feet',
        'cost',
        'cost_period',
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
        return $this->hasMany(PropertyPhoto::class, 'property_id', 'id');
    }

    public function property_reviews(){
        return $this->hasMany(PropertyReview::class, 'property_detail_id', 'id');
    }
}
