<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $title = "Daftar Posting";
        $posts = Post::all();
        return view('posts.index', compact('posts', 'title'));
    }

    public function detail($id) {
        $title = 'Detail Berita';
        $posts = Post::findOrFail($id);
        return view('posts.detail', compact('posts', 'title'));
    }
}
