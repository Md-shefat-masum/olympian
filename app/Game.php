<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{   
    use SoftDeletes;

    protected $fillable = [
        'game_title', 'game_subtitle', 'game_company', 'game_description1', 'game_description2', 'game_description3', 'game_description4', 'game_photo1', 'game_photo2', 'game_button', 'game_url', 'game_launchdate', 'game_note1', 'game_note2', 'game_note3', 'game_note4', 'game_feature_title1', 'game_feature_subtitle1', 'game_feature_title2', 'game_feature_subtitle2', 'game_feature_title3', 'game_feature_subtitle3', 'game_feature_title4', 'game_feature_subtitle4', 'game_status',
    ];

    protected $dates = [ 'game_launchdate' ];




}
