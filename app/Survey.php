<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'survey';
    protected $fillable = [
        'id','brand','question','answer','uploaded','timestamp','user'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
