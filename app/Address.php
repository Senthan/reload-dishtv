<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address_type', 'address_line1', 'address_line2', 'postal_code', 'address_description', 'address_source'
    ];
}
