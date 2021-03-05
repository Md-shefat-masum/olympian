<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use SoftDeletes;
    
    protected $fillable = [ 'about_pagename', 'about_toplinkone', 'about_toplinktwo', 'about_pagebanner' , 'about_title', 'about_description1', 'about_description2', 'about_description3', 'about_button', 'about_url', 'about_photo', 'about_status'];


}
