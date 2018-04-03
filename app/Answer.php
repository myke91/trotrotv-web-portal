<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = [
        'id','answer','question_id'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
