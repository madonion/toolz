<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function description()
    {
        return $this->hasOne('App\Products_description','products_id','products_id');
    }
    public function manufacturer()
    {
        return $this->hasOne('App\Manufacturer','manufacturers_id','manufacturers_id');
    }
    public function attributes()
    {
        return $this->hasMany('App\Products_attribute','products_id','products_id');
    }
}
