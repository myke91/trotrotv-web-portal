<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $fillable = [
        'id','vehicle','station'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
