<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_options_value extends Model
{
    //
    public $primaryKey = 'products_options_values_id';


    public function products_attribute()
    {
        return $this->belongsTo('App\Products_attribute','products_options_values_id','options_values_id');
    }
}
