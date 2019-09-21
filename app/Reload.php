<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reload extends Model
{
    protected $fillable = [
        'user_id', 'recharge'
    ];
}
