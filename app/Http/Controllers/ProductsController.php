<?php

namespace App\Http\Controllers;

use App\Products_attribute;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class productsController extends Controller
{
    //
    public function index(\App\Product $product){

        //$options = new Products_option;

        $description = $product->description()->first();

        $manufacturer = $product->manufacturer()->first();

        $attributes = $product->attributes()
                                ->orderBy('cod_unic')
                                ->get();

        //dd($options);
        //dd(Products_option::find($attributes->first()->options_id));
        //dd(\App\Products_options_value::find([]));

        $attributes->each(function ($item,$key) use ($product) {
            $val_key = intval($item->options_values_id);
            //TODO: prea multe interogari!
            $v = DB::table('products_options_values')->where('products_options_values_id',$val_key)->first();

            $item->val = $v->products_options_values_name;

            //FIXME: cel mai probabil sunt si operatii pe minus

            $item->options_values_price +=  $product->products_price;
            $item->options_values_price_2 +=  $product->products_price_2;
            $item->options_values_price_3 +=  $product->products_price_3;
        });
        //TODO: fix this shit
        $images =[$product->products_image,$product->products_image_2,$product->products_image_3,$product->products_image_4];

        return view('pages.product')->with(['p'=>$product])
                                    ->with(['pd'=>$description])
                                    ->with(['m'=>$manufacturer])
                                    ->with(['images'=>$images])
                                    ->with(['attributes'=>$attributes])
                                    ->with(['option'=>\App\Products_option::find($attributes->first()->options_id)]);
    }
}
