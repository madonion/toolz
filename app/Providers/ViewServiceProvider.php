<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\DB;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function addUrl($o){
        $o->url='catalog-'.str_slug($o->categories_name).'-c-'.$o->parent_id.'_'.$o->categories_id.'.html';
        return $o;
    }

    public function boot()
    {
        //



         $categories =  DB::table('categories')
                ->select('categories.categories_id','categories.slug','categories_description.categories_name', 'categories.parent_id')
                ->join('categories_description','categories.categories_id', '=','categories_description.categories_id')
                ->where('categories.parent_id','=', 1)
                ->orderBy('sort_order')
                //TODO: de implementat cache-ul
                ->get();


     //$categoriesWithUrl =  array_map([$this,"addUrl"],$categories);
        view()->share('categories',$categories);
        view()->share('siteurl',  \Config::get('constants.toolz_url'));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
