<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_description extends Model
{
    protected $table = 'products_description';
    //
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
}
