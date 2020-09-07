<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;

class PostController extends Controller
{
    public function index(Post $post)
    {
        // return $post->get();
        return view('index')->with(['posts' => $post->getByLimit()]);
    }

    public function show(Post $id)
    {
        return view('detail')->with(['post' => $id]);
    }
    
    public function create()
    {
        return view('entry');
    }

    public function store(Request $request)
    {
        $this -> validate($request,Post::$rules); 
        $post = new Post;
        $form = $request -> all();
        $post -> fill($form) -> save();
        return redirect('/');

    }
}
