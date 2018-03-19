<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = 'station';
    protected $fillable = [
        'id','station_name','location'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
