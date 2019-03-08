<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index() {
    	return view("post.index");
    }

    public function getPosts() {
    	$posts = Post::paginate(4);
    	return $posts;
    }

    public function createPost(Request $request) {
    	$request->validate([
    		'title'	=> 'required|min:4',
    		'category_id'	=> 'required',
    		'body'		=> 'required'
    	]);
    	Post::insert($request->all());
    	return ["message" => "success"];
    }


}
