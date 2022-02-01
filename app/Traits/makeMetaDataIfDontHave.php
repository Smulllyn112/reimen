<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
trait makeMetaDataIfDontHave
{
	public function makeMetaDataIfDontHave($element,$titleOrName,$descriptionOrContent)
	{
			$locale = app()->getLocale();

           
            if(!$element->translate($locale)->meta_keywords){

 				$bits = explode(" ", strip_tags($element->$titleOrName));
                $converted_meta_keywords = str_limit(implode(",", array_unique(array_filter($bits, function($v)
                    { 
                        return strlen($v) > 2   ;  
                    }))),60);        // UNIQUE ELEMEK,amelyek hossz egyenkent minimum 2,és osszesen 60 karakter az egesz.

                 //$converted_meta_keywords = str_limit($converted_meta_keywords,5);
                 //dd( Str::words($converted_meta_keywords, '0'));
                 $element->translate($locale)->meta_keywords = $converted_meta_keywords;
                
                //dd($product->meta_keywords);
            }   





			if(!$element->translate($locale)->meta_desc){
                $bits = explode(" ", strip_tags($element->$descriptionOrContent));
                $converted_meta_desc = str_limit(implode(" ", array_unique(array_filter($bits, function($v)
                    { 
                        return strlen($v) > 2   ;  
                    }))),160);      

                $element->translate($locale)->meta_desc = $converted_meta_desc;
                
                //dd($product->meta_desc);
            } 



	}


}




