<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistTVType extends Model
{
    protected $fillable = ['name', 'description'];


    public function distvs(){

        return $this->hasMany('App\DistTVInfo');
    }
}
