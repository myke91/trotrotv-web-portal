<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'survey';
    protected $fillable = [
        'id','brand_name','question','answer','uploaded','timestamp'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
