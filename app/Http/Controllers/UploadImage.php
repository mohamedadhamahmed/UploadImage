<?php

namespace App\Http\Controllers;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Trait\UploadImageTrait;
class UploadImage extends Controller
{
    //

    public function index(){
        return view('upload');
    }

    use UploadImageTrait;
    public function store(Request $request){
     $path=   $this->uploadImage($request,'users');
     Images::create(['path'=>$path]);
     return 'Done';
    }
}
