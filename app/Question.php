<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'id','question','type','brand_name'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
