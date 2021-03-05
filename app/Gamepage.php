<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gamepage extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'game_pagename', 'game_toplinkone', 'game_toplinktwo', 'game_pagebanner' ];
}
