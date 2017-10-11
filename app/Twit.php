<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twit extends Model
{
    protected $fillable = [
        'body', 'author'
    ];
}
