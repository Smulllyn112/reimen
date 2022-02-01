<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
trait modelTrait
{
    public static function statusJustActiveOrNot($model){
    	return (implode(',',[
    		$model::NOT_ACTIVE_STATUS,
    		$model::ACTIVE_STATUS,
    	])); 
    }

}

