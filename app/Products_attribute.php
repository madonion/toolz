<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_attribute extends Model
{
    //
    public $primaryKey = 'options_id';

    public function products_option()
    {
        return $this->hasOne('App\Products_option','options_id','products_options_id');
    }

    public function products_options_value()
    {
        return $this->hasOne('App\Products_options_value','options_values_id','products_options_values_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product','products_id','products_id');
    }

}
