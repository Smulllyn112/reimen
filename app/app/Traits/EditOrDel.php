<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Contact;

use Illuminate\Http\Request;
use App\Traits\Responser;

trait EditOrDel
{
    use Responser;

    public function delItem(Model $model, $route)
    {
        /*request()->validate([
            'id' => 'required|int',
        ]); */
        
        $model->delete();

        return $this->toRoute($route,'deleted');


    }


}


