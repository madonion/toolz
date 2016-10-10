<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 7/17/16
 * Time: 9:21 PM
 */

namespace App\Helpers;


class Image
{

    public static function getUrl($image,$mare = false){
        if($image == ''){
            return 'http://www.toolszone.ro/images/default.gif';
        }
        $size = $mare?"mari":"mici";
        $path = 'http://www.toolszone.ro/images/'.$size.'/'. $image[0] .'/';
        return $path . $image;
    }
    public static function getManufacturer($image){
        return 'http://www.toolszone.ro/images/manufacturers/'.$image;
    }
}