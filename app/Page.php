<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'pagename', 'home_link', 'link1', 'link2', 'link3', 'link4', 'game_pagebanner', 'gallery_pagebanner', 'blog_pagebanner', 'contact_pagebanner', 'video_title', 'video_link', 'map_title', 'map_link' ];

}
