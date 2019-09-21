<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistTVInfo extends Model
{
    protected $fillable = [
        'dish_tv_type_id', 'user_id', 'phone_number', 'monthly_paid', 'plan', 'model', 'sr_no', 'card_no', 'chip_id', 'vsc_no', 'smart_card_no', 'cdsn_no', 'image_name'
    ];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function distTVType(){

        return $this->belongsTo('App\DistTVType', "dish_tv_type_id", "id");
    }
}
