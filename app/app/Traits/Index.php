<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Contact;

use Illuminate\Http\Request;

trait Index
{

    public function ShowIndex(Model $model, $view,$elements)
    
    {


       /* $elements = $model::elements;
        ${$elements} = $model::orderBy('status', 'asc')->orderBy('updated_at', 'desc')->paginate(5);
        $compact = ${$elements};
        $total = count($model::all()); 
        return view($view,compact($model::elements,'total')); */


        //$elements = $compact;
        ${$elements} = $model::orderBy('updated_at', 'desc')->paginate(5);
        $total = count($model::all()); 
        return view($view,compact($elements,'total'));
 


    }


}