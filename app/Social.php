<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Social extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sm_facebook', 'sm_twitter', 'sm_linkedin', 'sm_pinterest', 'sm_instagram', 'sm_youtube', 'sm_google', 'sm_status',
    ];
}
