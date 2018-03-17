<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = 'station';
    protected $fillable = [
        'station_id','station_name','location'
    ];
    protected $primaryKey = 'station_id';
    public $timestamps = true;
}
