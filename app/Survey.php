<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'survey';
    protected $fillable = [
        'survey_id','brand_id','question_id','answer','uploaded','timestamp'
    ];
    protected $primaryKey = 'survey_id';
    public $timestamps = true;
}
