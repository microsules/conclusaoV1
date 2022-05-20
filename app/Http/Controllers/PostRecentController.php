<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller\Auth;
use App\Post;

class PostRecentController extends Controller{
    public function index(){
        // $posts = Post::where("created_at", "desc LIMIT 3" );
        $posts = Post::all()->sortByDesc('created_at')->take(3);

        return view("postsRecent",[
            "posts" => $posts
        ]);
    }

}