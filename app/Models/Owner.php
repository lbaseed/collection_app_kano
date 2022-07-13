<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        "last_name",
        "other_names",
        "phone_num",
        "email",
        "address",
        "gender",
        "dob",
        "tin",
        "occupation",

    ];

    function vehicles(){
       return  $this->hasMany(Vehicle::class);
    }
}
