<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $fillable = [
        'vehicle_id','vehicle_number','station_id'
    ];
    protected $primaryKey = 'vehicle_id';
    public $timestamps = true;
}
