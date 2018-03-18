<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'question_id','question','type'
    ];
    protected $primaryKey = 'question_id';
    public $timestamps = true;
}
