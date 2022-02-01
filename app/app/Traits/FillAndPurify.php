<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
trait FillAndPurify
{
	public function FillAndPurify($element)
	{
 		$element->fill(clean(request()->only($element->getFillable())));
 		if(request()->get("translations")){
 			$translation = $element->fill(clean(request()->get("translations")));
 		}
 		
	}


}


//$element->fill(clean($request->only($element->getFillable())))