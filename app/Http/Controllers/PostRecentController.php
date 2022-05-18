<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Category;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller{
    public function index(){
        $posts = Post::where("created_at", "desc LIMIT 3" );

        return view("posts",[
            "posts" => $posts
        ]);
    }

}