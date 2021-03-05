<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'cate_name', 'cate_slug', 'cate_status' ];

    public function posts() {
        return $this->belongsToMany('App\Post', 'category_posts')->withTimestamps();
    }
    
}
