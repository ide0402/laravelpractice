<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        // return $post->get();
        return view('index')->with(['posts' => $post->getByLimit()]);
    }

    public function show(Post $id)
    {
        \Log::info($id."コントローラー");
        return view('detail')->with(['post' => $id]);
    }
    //
}
