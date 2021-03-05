<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contactus extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['conus_name', 'conus_email', 'conus_phone', 'conus_mess', 'conus_slug', 'conus_status'];

}
