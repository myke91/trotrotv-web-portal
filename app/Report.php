<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    protected $fillable = [
        'report_id','vehicle_id','question_id','answer','uploaded','timestamp'
    ];
    protected $primaryKey = 'report_id';
    public $timestamps = true;
}
