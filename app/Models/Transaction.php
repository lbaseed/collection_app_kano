<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
       "policy_id",
       "amount",
       "vendor",
       "trans_date",
       "policy_type",
       "iei_ref",
       "status",
       "trans_type"
    ];

    function policy(){
        return $this->belongsTo(Policy::class);
    }

    function vehicle(){
        return $this->belongsToThrough(Vehicle::class, Policy::class);
    }
}
