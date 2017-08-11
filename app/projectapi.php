<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectapi extends Model
{
    //
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'studentid',
        'image',
        'contactno'
    ];
}
