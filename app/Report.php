<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    protected $fillable = [
        'id','vehicle_id','question_id','answer','uploaded','timestamp'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
