<?php

namespace App\Http\Controllers;

use App\Traits\EditOrDel;
use App\Traits\FillAndPurify;
use App\Traits\ImageHandling;
use App\Traits\Index;
use App\Traits\makeMetaDataIfDontHave;
use App\Traits\slugGenerator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    use Index,FillAndPurify,ImageHandling,EditOrDel,slugGenerator,makeMetaDataIfDontHave;
}
