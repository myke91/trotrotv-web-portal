<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    protected $fillable = [
        'id','vehicle','question','answer','uploaded','comments','timestamp','user'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
