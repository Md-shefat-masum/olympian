<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'ban_title', 'ban_subtitle', 'ban_button', 'ban_url', 'photo', 'ban_status',
    ];


}
