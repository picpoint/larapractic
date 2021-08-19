<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index() {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(3);
        return view('posts/index', compact('posts'));
    }


    public function show($slug) {
        return view('posts.show');
    }

}
