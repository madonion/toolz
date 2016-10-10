<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category as Category;
use Illuminate\Support\Facades\DB;

class categoriesController extends Controller
{

    public function index(\App\Category $category){
        $description = $category->description()->first();

        $items = Category::where('parent_id',$category->categories_id)->get();
        if($items->count() == 0) {
            $products = DB::table('products_to_categories')
                        ->where('categories_id',$category->categories_id)
                        ->get();
            $product_ids = [];

            //TODO: find a better way to
            foreach ($products as $p){
                $product_ids[] = $p->products_id;
            }

            $items = Product::whereIn('products_id',$product_ids)
                                ->paginate(50);
            $items->each(function ($item){
                $d  = DB::table('products_description')
                            ->where('products_id',$item->products_id)
                            ->first();
                if(isset($d->products_name))
                    $item->products_name = $d->products_name;
            });
//            dd($items);
            return view('pages.products_aggregate')->with(['c'=>$category])->with(['cd'=>$description])->with(['items'=>$items]);
        }
        $items->each(function ($item){
            $index = 0;

            $firstProduct = DB::table('products_to_categories')
                ->where('categories_id', $item->categories_id)
                ->where('products_id', '<>',null )
                ->first();

            if(isset($firstProduct->products_id))
            $product  = DB::table('products')
                ->where('products_id',$firstProduct->products_id)
                ->first();
            //dd($product);
            if(isset($product->products_image))
                $item->categories_image = $product->products_image;
        });
        return view('pages.category')->with(['c'=>$category])->with(['cd'=>$description])->with(['items'=>$items]);
    }
}
