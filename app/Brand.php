<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    protected $fillable = [
        'brand_id','brand_name','location','contact_person','contact_number','email'
    ];
    protected $primaryKey = 'brand_id';
    public $timestamps = true;
}
