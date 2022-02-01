<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
trait Responser
{
	public function goBack($data)
	{


		if($data == "deleted"){
			$msg = "Az adatokat sikseresn törölted!";
		}

		if($data == "updated"){
			$msg = "Sikeres módosítások!";
		}

		if($data == "saved"){
			$msg = "Az adatokat sikseresn mentetted!";
		}
		return back()->with('msg', $msg);
	}


	public function toRoute($route,$data,$slug=null)
	{	
		if($data == "deleted"){
			$msg = "Az adatokat sikseresn törölted!";
		}

		if($data == "updated"){
			$msg = "Sikeres módosítások!";
		}

		if($data == "saved"){
			$msg = "Az adatokat sikseresn mentetted!";
		}

		if($slug !== null){
			return \Redirect::route($route,['slug'=> $slug ])->with('msg',$msg);
		}else{
			return \Redirect::route($route)->with('msg',$msg);
		}
		
	}

}

