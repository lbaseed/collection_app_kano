<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;
use App\Models\Owner;
use App\Models\Transaction;

class Policy extends Model
{
    use HasFactory;

    protected $fillable = [
        "vehicle_id",
        "owner_id",
        "registration_number",
        "policy_type",
        "status",
        "amount",
        "vendor"
    ];

    function owner(){
       return $this->belongsTo(Owner::class);
    }

    function vehicle(){
       return  $this->belongsTo(Vehicle::class);
    }

    function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
