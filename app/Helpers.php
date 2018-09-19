<?php
use App\Information;

class Helpers {
    public static function getInformation($id){
        $lang = LaravelLocalization::getCurrentLocale();

        $info = Information::where('lang',$lang)->where('name',$id)->first();

        return $info['content'];

    }

}