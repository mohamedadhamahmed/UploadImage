<?php

namespace App\Trait;

use Illuminate\Http\Request;
trait UploadImageTrait{
    public function uploadImage(Request $request,$folderName){
        $image=$request->file('photo')->getclientoriginalname();
        $path=$request->file('photo')->storeAs($folderName,$image,'UserImage');
        return $path;
    }
}