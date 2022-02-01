<?php
namespace App\Traits;


use App\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;

trait ImageHandling
{

	public function SaveImageIfSended($element,$path,$width,$height,$ratio="fit")
	{
        $image = request()->image;
		if($image){

           // $width = round(1.521*$width);
           // $height = round(1.521*$height);
           // dd([$width,$height ]);

            $filename = $image->getClientoriginalName();

        
            $image->storeAs($path, $filename,'page_content_images');
            

            //$origPath = public_path('page_content_images'.'/'.$path.'/'.$filename);
            $origPath = base_path().'/public/page_content_images/' .$path.'/'.$filename;
            //dd($origPath);
            //$location = base_path().'/images/admin/' . $filename;
            //$origPath =  public_path('page_content_images/partners/eper.jpg');
            $big_image = Image::make($origPath)->$ratio($width,$height, function($constraint) {    
                $constraint->upsize();
            });
            $big_image->save($origPath); 

            $element->image = $filename;
		}

	}



    public function saveLazyLoadThumbnailIfSended($element,$path){
        $image = request()->image;
        if($image){
            $imageSizes = getimagesize($image);
            $width=  (int)floor($imageSizes[0]/30);
            $height= (int)floor($imageSizes[1]/30);
            //dd(floor((int)$imageSizes[1]/10));
            // dd((int)floor($imageSizes[1]/10));
             //dd(gettype((int)floor($imageSizes[1]/10)));

            $filename = $image->getClientoriginalName();

            $image->storeAs($path, $filename,'page_content_images');

            //$thumbnail_path = public_path('page_content_images'.'/'.$path.'/'.$filename);
            $thumbnail_path = base_path().'/public/page_content_images/' .$path.'/'.$filename;
            $thumbnail_image = Image::make($thumbnail_path)->fit($width, $height, function($constraint) {  
                $constraint->upsize();
            });
            $thumbnail_image->save($thumbnail_path);             

            $element->image = $filename;
        }        
    }    


    public function deleteImages($element,$urls)
    {
        foreach ($urls as $url){
            Storage::disk('page_content_images')->delete("$url/$element->id/".$element->image);
        }

    }

    public function deleteFolders($element,$urls)
    {
        foreach ($urls as $url){
            File::deleteDirectory(public_path('page_content_images/'.$url.'/'.$element->id));
        }

    }

    public function saveFileIfSended($element,$path){
        $file = request()->file;
        if($file){

            $filename = $file->getClientoriginalName();

            $file->storeAs($path, $filename,'uploaded_files');
             
            $element->file = $filename;
        }        
    }    



}






