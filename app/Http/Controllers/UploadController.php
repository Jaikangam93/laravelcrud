<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Fileupload;


class UploadController extends Controller
{
    public function view(){

    	return view ('pages.upload');

    }

    public function upload(Request $request){
       
        //From Bitflumes Tutorial     	
        if($request->hasFile('image')){
    		//$request->file('image');
    		$filename = $request->image->getClientOriginalName();
            $filesize = $request->image->getClientSize();
    		
    		$request->image->storeAs('public/Upload', $filename);
    		

            $file = new Fileupload;
            $file ->name = $filename;
            $file ->size= $filesize;

            $file ->save();

            return ' Image Uploaded ' ;
            
            
            
    	}
    	else 
    		return 'No File Selected';
        


    }
}


