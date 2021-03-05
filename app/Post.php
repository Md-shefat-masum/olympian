<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'post_title', 'post_slug', 'user_id', 'post_body1', 'post_body2', 'post_body3', 'post_body4', 'post_image', 'post_status' ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function categories() {
        return $this->belongsToMany('App\Category', 'category_posts')->withTimestamps();
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }


}
