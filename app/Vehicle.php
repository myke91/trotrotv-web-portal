<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $fillable = [
        'id','vehicle_name','station_name'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
