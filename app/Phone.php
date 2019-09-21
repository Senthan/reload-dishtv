<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'phone_type', 'phone_number', 'contact_description', 'contact_source'
    ];
}
