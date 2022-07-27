<?php

namespace App\Http\Controllers;

use App\Models\Post as ModelsPost;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function index()
    {
        return view('user.layouts.posts', [
            'title' => 'Post`s Page',
            'posts' => ModelsPost::latest()->get()
        ]);
    }
}
