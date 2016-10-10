<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories_description extends Model
{
    protected $table = 'categories_description';
    //
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
}
