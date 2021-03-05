<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;


    protected $fillable = [
        'name', 'phone', 'username', 'email', 'twitter', 'fb', 'linkedin', 'designation', 'password', 'role_id', 'photo', 'address', 'note', 'status',
    ];

 
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role() {
        return $this->belongsTo(Role::class);
    }


}
