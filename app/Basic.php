<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basic extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'basic_name', 'basic_title', 'basic_subtitle', 'basic_aboutus', 'basic_details', 'basic_favicon', 'basic_logo', 'basic_stickylogo', 'basic_flogo', 'basic_status',
    ];
}
