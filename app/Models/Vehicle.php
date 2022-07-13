<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        "owner_id",
        "chasis_number",
        "registration_number",
        "vehicle_type",
        "vehicle_make",
        "engine_number",
        "year_of_make",
        "vehicle_colour",
        "vehicle_model",
        "commercial_type",
        "created_by"
    ];

    function owner(){
      return  $this->belongsTo(Owner::class);
    }
}
