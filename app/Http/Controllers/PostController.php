<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function search(Request $request)
    {
        $data = Post::all();
        return view('index', compact('data'));
    }
}
