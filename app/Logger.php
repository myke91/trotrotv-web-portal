<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logger extends Model
{
    protected $table = 'access_code';
    protected $fillable = [
        'id','username','code'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
