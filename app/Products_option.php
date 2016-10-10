<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_option extends Model
{
    //
    public $primaryKey = 'products_options_id';


    public function products_attribute()
    {
        return $this->belongsTo('App\Products_attribute','products_options_id','options_id');
    }
}
