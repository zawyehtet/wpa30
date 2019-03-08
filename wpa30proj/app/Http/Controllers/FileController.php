<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class FileController extends Controller
{

	public function __construct() {
		$this->middleware("auth");
	}

    //
    public function getFile() {
    	return view("upload");
    }

    public function uploadFile(Request $request) {
    	$request->validate([
    		"image"	=> 'mimes:jpeg,bmp,png'
    	]);
    	// var_dump($request->image->getClientOriginalName());
    	
    	$file_name = $request->image->store("public");
    	$e_file_name = explode("/", $file_name);
    	$user_id = \Auth::id();
    	Image::create([
    		'user_id'	=> $user_id,
    		'name'		=> $e_file_name[1]
    	]);
    	dd("OK!");
    }
}
