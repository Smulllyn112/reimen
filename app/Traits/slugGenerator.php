<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Contact;

use Illuminate\Http\Request;

trait slugGenerator
{


    public function generateSlug($model,$element,$makeSLugFrom)
    //public function ShowOne()  $partner,$slug,'admin.partners.show'
    {
 		$slug = str_slug($makeSLugFrom);        // az eredeti title requestjet allitja be alapbol.

       // dd($slug);
        $similar_slug = $model::where('slug', 'like', $slug . '%')->max('slug');
        if(!is_null($similar_slug)){           // ha van hasonlo slug,akkor a $slug valtozot irja felul.
            //$similar_slug = $similar_element->slug;
          //  $slug .= $slug . '-';
          //  dd($slug);
           // dd( ltrim($similar_slug,$slug));
            $last_ai_num = ltrim($similar_slug,$slug);
            //dd($last_ai_num);
            if($last_ai_num ==""){
                //dd($last_ai_num);
                $last_ai_num =0;
            }
            //dd($last_ai_num);
            //$new_ai_num = $last_ai_num+1;
           // $slug = str_replace_last($last_ai_num, $new_ai_num, $slug);
            $slug .= $last_ai_num+1;
            //dd($slug);
        }
        

        //dd($amount);
        $element ->slug = $slug; 
    }

}

