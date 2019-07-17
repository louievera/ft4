<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticlesController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at','desc')
                    ->paginate(15);
        return json_encode($posts);
    }

    public function showPost($slug)
    {
        $post = Post::where('slug','=',$slug)
                    ->firstOrFail();
        return view('post.show',['post' => $post]);
    }
}
