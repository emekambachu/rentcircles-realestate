<?php

namespace App\Models\Properties;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyReview extends Model
{
    protected $fillable = [
        'property_detail_id',
        'user_id',
        'name',
        'email',
        'description'
    ];

    public function property_detail(){
        return $this->belongsTo(PropertyDetail::class, 'property_detail_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
