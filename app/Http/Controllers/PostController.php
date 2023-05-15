<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request)
    {
        return view('index');
    }

    public function home(Request $request)
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $data = Post::all();
        return view('index', compact('data'));
    }
}
