<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
   public static function getName($id){
       return self::findOrFail($id)->name;
   }
}
