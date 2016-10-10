<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function description()
    {
        return $this->hasOne('App\Categories_description','categories_id','categories_id');
    }
}
