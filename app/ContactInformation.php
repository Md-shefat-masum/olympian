<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactInformation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'ci_phone1', 'ci_phone2', 'ci_email1', 'ci_email2', 'ci_add1', 'ci_add2', 'ci_status',
    ];
}
